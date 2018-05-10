    var sortColumn;
    var updatePageSize;
    var searchKeywords;
    var paginate;
    var datadelete;
    var url = "";
    var getBaseUrl;
    $('#overlay').hide();
    $.getBaseUrl = function(){
        return url;
    };
   
    $(function(){
        var page=1;
        var pagesize = 10;
        var keywords = "";
        var orderby = "";
        var delaytimer;
        sortColumn = function(key,order){
            orderby = key + " " + order;
            $.getData();
        } 
        updatePageSize = function(ele){
            pagesize = ele.options[ele.selectedIndex].value;
            $.getData();
        } 
        searchKeywords = function(input){
            clearTimeout(delaytimer);
            keywords = !!input.value ? input.value : "";
            delaytimer = setTimeout(function(){
                $.getData();
            },1000);
        }
        datadelete = function(id){
            var dURL = $.getBaseUrl()+"/"+id;
            var formdata= new FormData;
            formdata.append('_method','DELETE');
            formdata.append('_token',$('meta[name=csrf-token]').attr('content'));
            $('#overlay').show().css('display', 'flex');
            $.ajax({
                url: dURL,
                type: 'post',
                data: {
                        '_method':'DELETE',
                        '_token': $('meta[name=csrf-token]').attr('content')
                      },
                success: function (data) {
                    $('#overlay').hide();
                    $.getData();
                },
                error: function(e){
                    $('#overlay').hide();
                    alert("Failed.");
                } 
            });
        }
        paginate = function(inp){
            page = !!inp ? inp : 1;
           
            $.getData();
        }
        $.getData = function(){
            $('#overlay').show().css('display', 'flex');
            var sURL = $.getBaseUrl()+"/search/"+"?page="+page+"&pagesize="+pagesize+"&keywords="+keywords+"&orderby="+orderby;
           
            $.get(sURL).then(function(res){
              $('#overlay').hide();
              $.makeTemplate(res);         
            }).fail(function(e){
                $('#overlay').hide();
                console.log(e);
            });
        }
        $.makeTemplate = function(data){
            $template = $('#nepuzz-table').empty();
            $table = $.getSearchFields();
            $table += '<table id="datatable " class="table table-striped jambo_table bulk_action" >';
            $table += '<thead class=""><tr>';
            $table += $.getHeader(data.fields);
            $table += '</tr>';
            $table += '</thead>';
            $table +='<tbody>';
            $table += $.getBody(data.rows,data.fields);
            $table += '</tbody>';
            $table += '<tfoot class="">';
            $table += $.getHeader(data.fields);
            $table += '</tfoot>';
            $table += '</table>';
            $table += $.getPaginate(data);
            $template.html($table);
        }
        $.getHeader = function(val){
            console.log(orderby);
            var head_template = "";
            $.each(val,function(key,value){
                head_template += '<th>'+value.display;
                if(orderby == (value.key+" ASC")){
                     head_template += '<a href="#"  data-key='+value.key+'" onclick="sortColumn(\''+value.key+'\',\'DESC\',this)"> <i class="fa fa fa-sort-amount-desc" ></i></a></th>';
                }
                else if(orderby == ""){
                    head_template += '<a href="#"  data-key='+value.key+'" onclick="sortColumn(\''+value.key+'\',\'DESC\',this)"> <i class="fa fa fa-long-arrow-down" ></i><i class="fa fa fa-long-arrow-up" ></i></a></th>';
                }
                else
                    head_template += '<a href="#" onclick="sortColumn(\''+value.key+'\',\'ASC\',this)" data-key="'+value.key+'"> <i class="fa fa fa-sort-amount-asc "></i></a>';
                   
            })
            head_template += "<th> Option </th>";
            return head_template;
        }
        $.getBody = function(results,fields){
            var body_template ="";
            $.each(results,function(key,value){
                body_template +='<tr>';
               // body_template +='<td>'+key+'</td>'
                $.each(fields,function(fKey,fValue){
                    console.log(fValue);
                    if(!!fValue.option){
                        if(fValue.option == 'status'){
                            if(value[fValue.key]){
                                body_template += '<td><h6><label class="badge badge-success" style="width:50px;">Active</label></h6></td>';
                            }
                            else{
                                body_template += '<td><h6><label class="badge badge-danger" style="width:50px;">Inactive</label></h6></td>';
                            }
                            
                        }
                        
                        if(fValue.option == 'image'){
                            body_template += '<td><img src="'+ value[fValue.key]+'" class="rounded-circle" alt="'+ value[fValue.key] +'"></td>';
                            
                        }
                    }
                    else{
                    body_template += '<td>'+value[fValue.key]+'</td>';
                    }
                })
                body_template += '<td><div class="btn-group " role="group" aria-label="">';
                body_template += '<a  class="btn btn-primary btn-xs" href="'+window.location+"/"+ value.id +"/edit"+'">Edit</a>';
                body_template += '<a  class="btn btn-danger btn-xs" onclick="datadelete('+value.id+')">Delete</a>';
               // body_template += '<button type="button" class="btn btn-secondary">Right</button>';
                body_template += '</div></td>';
                body_template +='</tr>';
            })
            return body_template;
        }
        $.getSearchFields = function(){
            var search_template = "";
             search_template += '<div class="col-md-12 col-sm-12"><div class="row margin-10"><div class="col-sm-6 "><div class="dataTables_length" id="datatable_length"><label> Show: &nbsp;<select name="datatable_length" aria-controls="datatable" class="form-control input-sm" onchange="updatePageSize(this)">';
             search_template += '<option value="10" '+(pagesize == 10 ? "selected": "")+'>10</option>';
             search_template += '<option value="25" '+(pagesize == 25 ? "selected": "")+'>25</option>';
             search_template += '<option value="50" '+(pagesize == 50 ? "selected": "")+'>50</option>';
             search_template += '<option value="100" '+(pagesize == 100 ? "selected": "")+'>100</option>';
             search_template += '</select> </label></div></div>';
             search_template += '<div class="col-sm-6 "><div id="datatable_filter" class="dataTables_filter"><label>Search: &nbsp;<input type="search" class="form-control input-sm" placeholder="" aria-controls="datatable" value="'+(keywords.length > 0 ? keywords : "")+'" onKeyup="searchKeywords(this)"></label></div></div></div></div>';
             return search_template;
        }
        $.getPaginate = function(data){
            
            var paginate_template = "";
            var no_of_pagination = data.total / data.pagesize;

            if((data.total % data.pagesize) > 0 ){
                no_of_pagination = no_of_pagination+1; 
            }
            var show_no_of_pagination = no_of_pagination > 10 ? 10 : no_of_pagination;
            var next = (parseFloat(data.page) + 1);
            var previous = data.page -1;

            paginate_template +='<div class="col-md-12 col-sm-12"><div class="row">';
            paginate_template +='<div class="col-sm-5"><div class="dataTables_info" id="datatable-fixed-header_info" role="status" aria-live="polite">';
            paginate_template +='Showing '+ data.pagesize +' of '+ data.total+' entries';
            paginate_template += '</div></div>';
            paginate_template += '<div class="col-sm-7"><div class="dataTables_paginate paging_simple_numbers" id="datatable-fixed-header_paginate">';
            paginate_template += '<ul class="pagination float-right">';
            paginate_template += '<li class=" paginate-item previous" id="datatable-fixed-header_previous"><a href="#" class="page-link" aria-controls="datatable-fixed-header" data-dt-idx="0" tabindex="0" onclick="paginate('+0+')">First</a></li>';
            paginate_template += '<li class=" paginate-item  previous '+(previous > 0 ? "" : "disabled")+'" id="datatable-fixed-header_previous"><a href="#" class="page-link" aria-controls="datatable-fixed-header" data-dt-idx="0" tabindex="0" onclick="paginate('+(previous)+')">Previous</a></li>';
            for(var i=1; i <= show_no_of_pagination; i++){
                paginate_template += '<li class=" paginate-item '+(i != data.page ? "" : "disabled")+'"><a href="#" class="page-link" aria-controls="datatable-fixed-header" data-dt-idx="'+i+'" tabindex="'+(i-1)+'" onclick="paginate('+i+')">'+i+'</a></li>';
            }
            paginate_template += '<li class="paginate-item   next" id="datatable-fixed-header_next"><a href="#" class="page-link" aria-controls="datatable-fixed-header" data-dt-idx="7" tabindex="0" onclick="paginate('+(next)+')">Next</a></li>';
            paginate_template += '<li class=" paginate-item   next" id="datatable-fixed-header_next"><a href="#" class="page-link" aria-controls="datatable-fixed-header" data-dt-idx="7" tabindex="0" onclick="paginate('+(no_of_pagination-1)+')">Last</a></li>';
            paginate_template += '</ul></div></div></div></div>';

            return paginate_template;
        }
        if($('#nepuzz-table').length){
               url = $('#nepuzz-table').data('url');
                $.getData();
        }
    });
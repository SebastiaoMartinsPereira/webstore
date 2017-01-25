var AjaxService = function(){};


AjaxService.prototype.ajaxRequest = function(_url,_onerror,_onsucess,_headers,_type,_dataType,_data){

     _headers===undefined? {'X-CSRF-TOKEN': $('meta[name*="-token"]').attr('content')} : _headers;

     $.ajaxSetup({
         headers: _headers
     });

    $.ajax({
        url:_url,
        data:_data===undefined?{}:_data,
        type: _type===undefined?'GET':_type,
        dataType: _dataType===undefined?'JSON':_dataType,
        success:_onsucess,
        error:_onerror
    });
}

AjaxService.prototype.ajaxRequestPut = function(_url,_onerror,_onsucess,_headers,_data){
   this.ajaxRequest(_url,_onerror,_onsucess,_headers,'PUT','JSON',_data);
}

AjaxService.prototype.ajaxRequestDelete = function(_url,_onerror,_onsucess,_headers,_data){
   this.ajaxRequest(_url,_onerror,_onsucess,_headers,'DELETE','JSON',_data);
}
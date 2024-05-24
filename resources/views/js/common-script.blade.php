<script>

    async function updateFormData(url , form , type = null, loader = null , modal = null  , cb = null , html = null){
        form.append("_token" , "{{csrf_token()}}");
        let response = null;
        $.ajax({
            url : url,
            type : 'POST', 
            processData : false,
            contentType : false,
            async: false,
            data : form,
            success: function(res){
                switch(type){
                    case (1):
                        //return boolean
                        if(res.status){
                            toastr.success(res.msg)
                        }else{
                            toastr.error(res.error)
                        }
                        
                        response = res.status
                    break;
                    case (2):
                        if(res.status){
                            html.innerHTML = res.html;
                        }else{
                            toastr.error(res.error)
                        }
                    break;
                    case (3):
                        //return data
                    break;
                    case (4):
                        //run callback
                    break;

                }
                
            }
        })

        if(response !== null)
        {
            return response;
        }

    }

</script>
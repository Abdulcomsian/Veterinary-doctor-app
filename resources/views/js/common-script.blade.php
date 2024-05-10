<script>

    async function updateFormData(url , form , type = null, loader = null , modal = null  , cb = null , html = null){
        form.append("_token" , "{{csrf_token()}}");
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
                        //return boolean response
                        return true;
                    break;
                    case (2):
                        // update html
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
    }

</script>
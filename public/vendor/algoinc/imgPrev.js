/*  CREDIT------------------------------------------------------------
*   Supposed to run with bootstrap 4 ,font awesome and jquery, created by Edwin Wicaksono.
*   You can use these code for personal and comercial purpose
*   but please do not tampered the credit please.
*   this plugin is part of my hobby things.
*/


$.fn.imgPrev = function(options) {
    var parent = this;
    var totalCreated = 0;
    var fileGenerated = 0;
    var waitingImage = false;
    var currentImgInput = null;
    var visibility = true;
    //using options to overwrite this :D
    var settings = $.extend({
        maxSize:250000, 
        imgWidth:600,
        imgHeight:600,
        maxFile:5,
        biggerImg:true,
        errorSizeText:'Ukuran file terlalu besar',
        errorResolutionText:'Dimensi gambar diluar yang ditentukan'
    },options);

    if(totalCreated==0){
        this.append('<div class="row" id="imgPrevSkeleton"></div>');
        this.append('<button type="button" id="fileInputClickInvoker" class="btn btn btn-primary d-block mt-3"><i class="fas fa-paperclip"></i> Pilih gambar</button>');
        $(parent).find("#fileInputClickInvoker").click(function(){
            if(!waitingImage){
                totalCreated++;
                waitingImage = true;
                currentImgInput = $('<input type="file" name="file[]" accept=".jpg,.png" id="file'+totalCreated+'" class="d-none" />');
                currentImgInput.on("change", onInputValueChangeListener);
                currentImgInput.click();
            }else{  
                currentImgInput.click();
            }
        });
    }
    //generateNewInput();

    this.flush = function(){
        $(parent).find('#imgPrevSkeleton').empty();
        $(parent).find('input').empty();
    }

    this.hide = function(){
        $(parent).hide();
        visibility = false;
    }

    this.show = function(){
        $(parent).show();
        visibility = true;
    }

    this.imgQuota = function(quota){
        settings.maxFile = quota;
    }

    this.addOneQuota = function(){
        settings.maxFile++;
    }

    this.biggerImg = function(state){
        settings.biggerImg = state;
    }

    this.getVisibility = function(){
        return visibility;
    }

    function onInputValueChangeListener(e){
        console.log('triggered');
        if (e.target.files && e.target.files[0]) {
            if(e.target.files[0].size<=settings.maxSize){
                
                
                var reader = new FileReader();
                reader.onload = function(ev) {
                    var image = new Image();
                    image.src = ev.target.result;
                    image.onload = function(){
                        //console.log('width: '+this.width +', height: '+this.height);
                        if(this.width<= settings.imgWidth && this.height <= settings.imgHeight){
                            var colSet = !settings.biggerImg?"col-3":"col-6";
                            $(parent).find('#imgPrevSkeleton').append('<div class="'+ colSet +' mt-4" id="imgPrev'+totalCreated+'"><img class="w-100 shadow rounded" id="img'+totalCreated+'" /><button data-id="'+totalCreated+'" type="button" class="btn btn-danger shadow rounded-circle mr-3 mt-1" style="position:absolute;top:0;right:0;" id="btnDel'+totalCreated+'"><i class="fas fa-trash text-white"></i></button></div>');
                            $(parent).find("#btnDel"+totalCreated).click(function(){
                                var selectedId = $(this).data('id');
                                //flush existing
                                $(parent).find("#file"+selectedId).remove();
                                $(parent).find("#imgPrev"+selectedId).remove();
                                fileGenerated--;
                                //recycle
                                $(parent).find("#fileInputClickInvoker").removeClass('d-none').addClass('d-block');
                            });
                            $(parent).find('#img'+totalCreated).attr('src', ev.target.result);
                            console.log($('#img'+totalCreated).width());
                            if(settings.maxFile>1){
                                $(parent).find('#img'+totalCreated).height($('#img'+totalCreated).width());
                            }else{
                                var height = $('#img'+totalCreated).width() * 0.66;
                                $(parent).find('#img'+totalCreated).height(height);
                            }
                            fileGenerated++;
                            parent.append(currentImgInput);
                            waitingImage=false;
                            currentImgInput=null; 
                            if(fileGenerated<settings.maxFile){
                                console.log(fileGenerated);
                                $(parent).find("#fileInputClickInvoker").removeClass('d-none').addClass('d-block');
                            }else{
                                $(parent).find("#fileInputClickInvoker").removeClass('d-block').addClass('d-none');
                            }
                               
                        }else{
                            $('<small id="lblErrorResolutionSize" class=" my-1 alert alert-danger d-block">'+settings.errorResolutionText+'</small>').insertBefore($(parent).find("#fileInputClickInvoker"));
                            setTimeout(function(){$(parent).find('#lblErrorResolutionSize').remove()},3000);
                        }
                    }
                }
                reader.readAsDataURL(e.target.files[0]);
            }else{
                console.log('image file size too big')
                $('<small id="lblErrorFileSize" class=" my-2 alert alert-danger d-block">'+settings.errorSizeText+'</small>').insertBefore($(parent).find("#fileInputClickInvoker"));
                setTimeout(function(){$(parent).find('#lblErrorFileSize').remove()},3000);
            }
        }
    }

    return this;
        
};
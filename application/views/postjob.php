    <div class="main-content">
        <div class="section-job">
            <div class="container">
                <div class="row">
                    <div class="parallax section parallax-off" style="background-image:url('<?php echo site_url()?>assets/img/fbg.jpg');">
                        <div class="container">
                            <div class="page-title text-center">
                                <div class="heading-holder">
                                    <h1>Submit a Job</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="submit-job">
                        <div class="container">
                            <div class="left-sidebar left-sidebar-lt">
                                <div class="col-md-12 col-lg-12 col-xs-12 nopadding">
                                    <div class="border-top" style="margin-top:20px; margin-bottom: -10px;">
                                    </div>
                                    <div class="gureny">
                                        <div class="title">
                                            <h2>Secure</h2>
                                        </div>
                                        <div class="desc">
                                            <p>
                                                <strong>100% Secure</strong> Job is done or money back</p>
                                            <p><i class="fa fa-shield" aria-hidden="true"></i></p>
                                        </div>
                                    </div>
                                    <div class="OurService">
                                        <div class="title">
                                            <h2>Our Service</h2>
                                        </div>
                                        <div class="desc">
                                            <ul>
                                                <li>You pay only the listed price without any hidden costs.</li>
                                                <li>We keep your money until you are happy with the delivered work.</li>
                                                <li>The job will be done or your money will be returned.</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="sidebar-content">
                                <div class="submit-job">
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <div class="wizard">
                                            <div class="wizard-inner">
                                                <ul class="nav submit-tabs" role="tablist">
                                                    <li role="presentation" class="active">
                                                        <a href="post-job.html#step1" data-toggle="tab" aria-controls="Describe Job" role="tab" title="Describe Job">
                                                                <span class="round-tab">
                                                                    <i class="glyphicon glyphicon-folder-open"></i>
                                                                </span>
                                                            </a>
                                                        <h2>Describe Job</h2>
                                                    </li>
                                                    <li role="presentation" class="disabled">
                                                        <a href="post-job.html#step2" data-toggle="tab" aria-controls="Work and Payment" role="tab" title="Work and Payment">
                                                                <span class="round-tab">
                                                                    <i class="glyphicon glyphicon-pencil"></i>
                                                                </span>
                                                            </a>
                                                        <h2>Work and Payment</h2>
                                                    </li>
                                                    <li role="presentation" class="disabled">
                                                        <a href="post-job.html#Publish" data-toggle="tab" aria-controls="Publish" role="tab" title="Publish">
                                                            <span class="round-tab"> <i class="glyphicon glyphicon-pushpin"></i>
                                                            </span> </a>
                                                        <h2>Publish</h2>
                                                    </li>
                                                    <li role="presentation" class="disabled">
                                                        <a href="post-job.html#complete" data-toggle="tab" aria-controls="Complete" role="tab" title="Complete">
                                                                <span class="round-tab">
                                                                    <i class="glyphicon glyphicon-ok"></i>
                                                                </span>
                                                            </a>
                                                        <h2>Complete</h2>
                                                    </li>
                                                </ul>
                                            </div>
                                        
                                            <!-- submit controller by method post  -->
                                            <form role="form" class="submit-job-form" id="jobpost_form" style="padding-bottom: 0px;" action="<?php site_url()?>postjob/savejob" method="POST">
                                                <div class="tab-content">
                                                    <div class="tab-pane active" role="tabpanel" id="step1">
                                                        <div class="widget">
                                                            <div class="row">
                                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                                    <label class="control-label">Select Category </label>
                                                                    <select class="selectpicker" data-style="btn-default" data-live-search="true" name="category_id" id="category_id">
                                                                        <?php if(!isset($cat_id)):?>    
                                                                            <option disabled selected style="display:none">Please Select</option>
                                                                        <?php endif;?>
                                                                        <?php foreach ($categories as $category){
                                                                            $class_str = '';
                                                                            if(isset($cat_id) &&$category['id'] == $cat_id)
                                                                                $class_str = 'selected';
                                                                            echo "<option value=".$category['id']." ".$class_str.">".$category['name']."</option>";
                                                                        }?>
                                                                    </select>
                                                                </div>
                                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                                    <label class="control-label">Select Subcategory </label>
                                                                    <select class="example-multiple-selected" id="subcategory" multiple="multiple" name="subcategory_id" >
                                                                        <?php foreach ($sub_categories as $sub_category) {
                                                                            $sub_class_str = '';
                                                                            if(isset($sub_id) && ($sub_category['id'] == $sub_id))
                                                                                $sub_class_str = 'selected';
                                                                            echo "<option value=".$sub_category['id']." ".$sub_class_str." >".$sub_category['name']."</option>";
                                                                        } ?>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-12 col-sm-12 col-xs-12">
                                                                    <label class="control-label">Project Title</label>
                                                                    <input class="form-control" placeholder="Project Title" type="text" name="pro_title" id="pro_title">
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-lg-12">
                                                                    <div class="box">
                                                                        <div class="box-content tickets-new">
                                                                            <div>
                                                                                <textarea name="editorX" id="editorX" rows="10" cols="80">
                                                                                </textarea>
                                                                                <script>
                                                                                    // Replace the <textarea id="editor1"> with a CKEditor
                                                                                    // instance, using default configuration.
                                                                                    CKEDITOR.replace('editorX');
                                                                                </script>
                                                                            </div>
                                                                            <div>
                                                                            </div>
                                                                            <div class="box-footer">
                                                                                <div class="pull-right">
                                                                                    <input type="hidden" name="tickets_by_user_id" value="<?php echo empty($this->session->userdata('user_id'))? '1' : $this->session->userdata('user_id') ?>">
                                                                                    <input type="hidden" name="tickets_by_user_type" value="team">
                                                                                    <hr>
                                                                                </div>
                                                                                <div class="clearfix"></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-12 col-sm-12">
                                                                    <label class="control-label upload-bg">Upload Files</label>
                                                                    <div class="img-pop">
                                                                        <div class="image-addon">
                                                                            <div class="add-more">
                                                                                <a href="post-job.html#" data-toggle="modal" data-target="#img-pop">
                                                                                    <!-- <img src="<?php echo site_url()?>assets/img/image01.svg"/> -->
                                                                                    <img src="<?php echo site_url()?>assets/img/upload 01.png" />
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="add-more">
                                                                            <button class="add_img_button">
                                                                                <!-- <img src="<?php echo site_url()?>assets/img/image.svg"/> -->
                                                                                <img src="<?php echo site_url()?>assets/img/upload_add.png" height="200%" />
                                                                            </button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-9 col-sm-9 col-xs-12">
                                                                    <label class="control-label">Add tasks</label>
                                                                    <div class=" multi-field-form">
                                                                    </div>
                                                                    <input class="form-control" placeholder="Add tasks" type="text" name="mytext[]" >
                                                                </div>
                                                                <div class="col-md-3 col-sm-3 col-xs-12">
                                                                    <button class="add_field_button">+ Add more taks</button>
                                                                </div>
                                                            </div> 
                                                            <ul>
                                                                <li class="row" style="font-size: 20px;width:100%;background-color: #373942;width: 100%;margin-left:-20px;margin-right: -30px;color:white;">
                                                                <button type="button" class="next-step" style="background-color: #6cb5f3;height: 100%;border:2px #6cb5f3 solid;width:200px;float: right;margin-right: -40px;">Next</button>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane" role="tabpanel" id="step2">
                                                        <div class="widget ">
                                                            <div class="row ">
                                                                <div class="col-md-12 col-sm-12 col-xs-12 ">
                                                                    <label class="control-label ">Inquiry Type </label>
                                                                    <div class="tab-content ">          
                                                                        <div class="tab-block mb25 ">
                                                                            <ul class="nav nav-tabs tabs-border ">
                                                                                <li class=" ">
                                                                                    <a href="#tab8_1" data-toggle="tab" aria-expanded="false"><i class="fa fa-pencil-square-o "></i>Assignment</a>
                                                                                </li>
                                                                                <li class=" ">
                                                                                    <a href="#tab8_2" data-toggle="tab" aria-expanded="true"><i class="fa fa-money "></i>Cost Estimate </a>
                                                                                </li>
                                                                                <li class=" ">
                                                                                    <a href="#tab8_3" data-toggle="tab" aria-expanded="true"><i class="fa fa-bullhorn "></i>Offer</a>
                                                                                </li>
                                                                                 <li class="active ">
                                                                                  <a style="border-color: #fff; background: #FFF; " href="#tab8_4" ></a>
                                                                                </li>
                                                                            </ul>
                                                                            <div class="tab-content ">
                                                                                <div id="tab8_1" class="tab-pane ">
                                                                                </div>
                                                                                <div id="tab8_2" class="tab-pane ">
                                                                                </div>
                                                                                <div id="tab8_3" class="tab-pane ">
                                                                                    <p></p>  
                                                                                    <ul class="nav nav-tabs tabs-border ">
                                                                                        <li class=" ">
                                                                                            <a href="#" data-toggle="tab " aria-expanded="false"><i class="fa fa-file-text "></i>Verbindlich</a>
                                                                                        </li>
                                                                                            <li class=" ">
                                                                                            <a href=" " data-toggle="tab" aria-expanded="true"><i class="fa fa-pencil-square-o "></i>Unverbindlich </a>
                                                                                        </li>
                                                                                            <li class=" ">
                                                                                            <a href=" " data-toggle="tab" aria-expanded="true"><i class="fa fa-window-restore "></i>Both</a>
                                                                                        </li>
                                                                                    </ul>
                                                                                </div>
                                                                                <div id="tab8_4" class="tab-pane ">
                                                                                    <p><b>TAB FOUR - </b>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf VHS.</p>
                                                                                </div>
                                                                                <div class="col-md-5 ">
                                                                                    <div class="table-top-border-90 ">
                                                                                    </div>
                                                                                </div>         
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-12 col-sm-12 col-xs-12 ">
                                                                    <label class="control-label ">Contract type</label>
                                                                    <div class="tab-content ">
                                                                        <div class="tab-block mb25 ">
                                                                            <ul class="nav nav-tabs tabs-border ">
                                                                                <li class=" ">
                                                                                  <a href="#tab8_5" data-toggle="tab" aria-expanded="false"><i class="fa fa-clock-o "></i>Standard Contract</a>
                                                                                </li>
                                                                                <li class=" ">
                                                                                   <a href="#tab8_6" data-toggle="tab" aria-expanded="true"><i class="fa fa-fighter-jet"></i>Express Contract</a>
                                                                                </li>
                                                                                 <li class="active">
                                                                                  <a style="border-color: #fff; background: #FFF; " href="#tab8_4" ></a>
                                                                                </li>
                                                                            </ul>
                                                                            <div class="tab-content ">
                                                                                <div id="tab8_6" class="tab-pane ">
                                                                                    <p><b>TAB THREE - </b>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</p> 
                                                                                </div>
                                                                                <div id="tab8_5" class="tab-pane ">
                                                                                    <p><b></b></p>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-5 ">
                                                                                <div class="table-top-border-90 ">
                                                                                </div>
                                                                            </div>         
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>        
                                                            <div class="row ">
                                                                <div class="col-md-6 col-sm-6 col-xs-12 ">
                                                                    <div class="tab-block mb25 ">
                                                                        <ul class="nav nav-tabs tabs-border nav-justified ">
                                                                            <label class="control-label ">Work Start</label>
                                                                            <li class="dropdown ">
                                                                                <a class="dropdown-toggle" href="#" role="menu" data-toggle="dropdown" aria-expanded="false">
                                                                                    <text id="start_time_title">Select Work Start</text><i class="fa fa-caret-down pl5"></i>
                                                                                </a>
                                                                                <ul class="dropdown-menu">
                                                                                    <li>
                                                                                        <div class="control-group">
                                                                                            <div class="controls input-append date form_date col-md-9" data-date="" data-date-format="dd MM yyyy" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd">
                                                                                                <span class="fa fa-calendar" style="margin-left:10px;"></span>
                                                                                                <input type="text" value="" readonly id="start_time" style="width:80%;">
                                                                                                <span class="add-on"><i class="icon-remove"></i></span>
                                                                                                <span class="add-on"><i class="icon-th"></i></span>
                                                                                            </div> 
                                                                                            <span data-toggle="dropdown-menu" class="btn-sm btn-default col-md-2" style="text-align: center;">Ok</span>
                                                                                        </div>
                                                                                        <script type="text/javascript">
                                                                                            $('.form_date').datetimepicker({
                                                                                                    language:  'fr',
                                                                                                    weekStart: 1,
                                                                                                    todayBtn:  1,
                                                                                                    autoclose: 1,
                                                                                                    todayHighlight: 1,
                                                                                                    startView: 2,
                                                                                                    minView: 2,
                                                                                                    forceParse: 0
                                                                                                });
                                                                                            $('#start_time').change(function(){
                                                                                                $('#start_time_title').html($('#start_time').val());
                                                                                            });
                                                                                            function agreestarttime(){
                                                                                                if(($('#start_time').val()).length>5){
                                                                                                    $('#start_time_title').html('<a data-toggle="dropdown-menu" aria-expanded="true"><i class="fa fa-handshake-o"></i>Agreement</i></span></a>')
                                                                                                }
                                                                                            }
                                                                                        </script>
                                                                                    </li>
                                                                                    <li>
                                                                                        <a onclick="agreestarttime()" data-toggle="dropdown-menu" aria-expanded="true"><i class="fa fa-handshake-o"></i>Agreement
                                                                                        </a>
                                                                                    </li>
                                                                                </ul>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <div class="tab-content">
                                                                    <div id="tab15_1" class="tab-pane">
                                                                        <p><b></b></p>
                                                                    </div>
                                                                    <div id="tab15_2" class="tab-pane">
                                                                        <div class="col-md-6 col-sm-6 col-xs-12">                                                                            
                                                                            <div class="form-group ">
                                                                                <div class='input-group date datetimepicker8'>
                                                                                    <input type='text' class="form-control "/>                 
                                                                                    <span class="input-group-addon "></span>
                                                                                    <span class="fa fa-calendar "></span>  
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>                                                          
                                                            <div class="row ">
                                                                <div class="col-md-6 col-sm-6 col-xs-12 ">
                                                                    <div class="tab-block mb25 ">
                                                                        <div class="col-md-10 ">
                                                                            <div class="table-top-border-90 ">
                                                                            </div>
                                                                        </div>                               
                                                                        <ul class="nav nav-tabs tabs-border nav-justified ">
                                                                            <label class="control-label">Work Delivery</label>
                                                                            <li class="dropdown">
                                                                                <a class="dropdown-toggle" href="#" role="menu" data-toggle="dropdown" aria-expanded="false"><text id="deliver_time_title">Work Delivery time</text><i class="fa fa-caret-down pl5"></i>
                                                                                </a>
                                                                                <ul class="dropdown-menu">
                                                                                   <li class="active">
                                                                                      <a href="#tab16_1" data-toggle="tab" aria-expanded="false"></a>
                                                                                    </li>
                                                                                    <li>
                                                                                        <div class="control-group">        
                                                                                            <div class="controls input-append date form_date col-md-9" data-date="" data-date-format="dd MM yyyy" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd">
                                                                                                <span class="fa fa-calendar" style="margin-left:10px;"></span>
                                                                                                <input type="text" value="" readonly id="deliver_time" style="width:80%">
                                                                                                <span class="add-on"><i class="icon-remove"></i></span>
                                                                                                <span class="add-on"><i class="icon-th"></i></span>
                                                                                            </div>
                                                                                            <span data-toggle="dropdown-menu" class="btn-sm btn-default col-md-2" style="text-align: center;">Ok</span>
                                                                                            <input type="hidden" id="dtp_input2" value="" /><br/>
                                                                                        </div>
                                                                                        <script type="text/javascript">
                                                                                            $('.form_date').datetimepicker({
                                                                                                language:  'fr',
                                                                                                weekStart: 1,
                                                                                                todayBtn:  1,
                                                                                                autoclose: 1,
                                                                                                todayHighlight: 1,
                                                                                                startView: 2,
                                                                                                minView: 2,
                                                                                                forceParse: 0
                                                                                            });
                                                                                            $('#deliver_time').change(function(){
                                                                                                $('#deliver_time_title').html($('#deliver_time').val());
                                                                                            });
                                                                                            function agreeDelivertime(){
                                                                                                if(($('#deliver_time').val()).length>5){
                                                                                                    $('#deliver_time_title').html('<a data-toggle="dropdown-menu" aria-expanded="true"><i class="fa fa-handshake-o"></i>Agreement</i></span></a>')
                                                                                                }
                                                                                            }
                                                                                        </script>
                                                                                    </li>
                                                                                    <li>
                                                                                     <a onclick="agreeDelivertime()" data-toggle="tab" aria-expanded="true"><i class="fa fa-handshake-o"></i>By Agreement</a>
                                                                                    </li>
                                                                                </ul>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <div class="tab-content ">
                                                                    <div id="tab16_1" class="tab-pane ">
                                                                      <p><b></b></p>
                                                                    </div>
                                                                    <div id="tab16_2" class="tab-pane ">
                                                                        <div class="col-md-6 col-sm-6 col-xs-12 ">                                        
                                                                             <div class="form-group ">
                                                                                 <div class='input-group date datetimepicker8'>
                                                                                      <input type='text' class="form-control "/>                 
                                                                                     <span class="input-group-addon "> </span>
                                                                                     <span class="fa fa-calendar "> </span>
                                                                                 </div>
                                                                             </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-5 ">
                                                                <div class="table-top-border-90">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-5 ">
                                                            <b><i></i></b>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                                <label class="control-label ">Add Skills</label>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="row">
                                                            <div class="col-md-12">
                                                            <div class="col-md-6 col-sm-6 col-xs-6">
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <a data-toggle="collapse" href="#collapse1">
                                                                            <div class="form-control " id="selectedSkill"  style="height: 36px;"></div>
                                                                        </a>
                                                                        <div id="collapse1" class="panel-collapse collapse" style="background-color: #ffffff;">
                                                                            <ul id="asd" role="menu">
                                                                                <li><label class="lbl" for="html"><input type="checkbox" class="a" id="html"> HTML</label></li>
                                                                                <!-- <li class="divider"></li> -->
                                                                                <li><label class="lbl" for="nodejs"><input type="checkbox" class="a" id="nodejs"> Node.js</label></li>
                                                                                <!-- <li><label class="lbl" for="javascript"><input type="checkbox" class="a" id="javascript">Javascript</label></li>
                                                                                <li><label class="lbl" for="css"><input type="checkbox" class="a" id="css">CSS</label></li>
                                                                                <li><label class="lbl" for="css3"><input type="checkbox" class="a" id="css3">CSS3</label></li> -->
                                                                                <li><label class="lbl" for="html5"><input type="checkbox" class="a" id="html5"> HTML5</label></li>
                                                                                <li><label class="lbl" for="angularjs"><input type="checkbox" class="a" id="angularjs"> Angularjs</label></li>
                                                                                <li><label class="lbl" for="reactjs"><input type="checkbox" class="a" id="reactjs"> React.js</label></li>
                                                                                <li class="divider"></li>
                                                                                <hr>
                                                                                <li> <center><a class="btn btn-success" data-toggle="collapse" href="#collapse1" style="margin-bottom: 20px;">Submit Skills</a></center></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <script type="text/javascript">
                                                                    if($("#selectedSkill").html().length < 3)
                                                                    {
                                                                        $("#selectedSkill").html("Company Skills"); 
                                                                    }
                                                                    $("input.a").change(function(){
                                                                        console.log($(this));
                                                                        var line = ($("div.form-control").html()).replace("Company Skills","");
                                                                        if($(this).is(":checked")) { 
                                                                                line += "<b class='skill1' id='"+ ($(this).closest('label').text()).replace(" ", "").replace(".", "").toLowerCase() +"'><a style='font-size:14px;margin-right:5px;' onclick='removeSkill($(this))' class='glyphicon glyphicon-remove'></a>"+$(this).closest('label').text() + "</b>";
                                                                                $("#selectedSkill").html(line);
                                                                            }
                                                                        else {
                                                                            var t_id = ($(this).closest('label').text()).replace(" ", "").replace(".", "").toLowerCase();
                                                                            $('b#'+t_id).remove();
                                                                            if($("#selectedSkill").html().length < 3)
                                                                            {
                                                                                $("#selectedSkill").html("Company Skills"); 
                                                                            }
                                                                        } 
                                                                    });
                                                                    $(".lbl").click(function(){
                                                                            if(($(this).closest('input.a')).is(":checked")) { 
                                                                            ($(this).closest('input.a')).prop('checked',false);
                                                                        }
                                                                        else {
                                                                            ($(this).closest('input.a')).prop('checked',true);
                                                                        }
                                                                    });
                                                                    function removeSkill(sp){
                                                                        sp.closest('b').remove();
                                                                        var c_id = sp.closest('b').attr('id');
                                                                        console.log(c_id);
                                                                        console.log(($("input[type=checkbox]#"+c_id)).attr('id'));
                                                                        $("input[type=checkbox]#"+c_id).prop('checked', false);
                                                                    }
                                                                    //  function aero(){
                                                                    //     if($('#aero').css.z-index == -1){
                                                                    //        $('#aero').css.z-index == 1;
                                                                    //     }
                                                                    //     else { 
                                                                    //         $('#aero').css.z-index == -1;
                                                                    //     } 
                                                                    //     console.log($('#aero'.css.z-index));
                                                                    // }
                                                                </script>
                                                            </div>
                                                            <div class="col-md-6 col-sm-6 col-xs-6">
                                                                    <div class="row">
                                                                        <div class="col-md-12">
                                                                            <a data-toggle="collapse" href="#collapse2">
                                                                                <div class="form-control " id="selectedQuality"  style="width:100%; height: 36px;"></div>
                                                                            </a>
                                                                            <div id="collapse2" class="panel-collapse collapse" style="background-color: #ffffff;z-index: 100;">
                                                                                <ul id="asd" role="menu">
                                                                                    <li><label class="lbl" for="html1"><input type="checkbox" class="b" id="html1"> HTML</label></li>
                                                                                <!-- <li class="divider"></li> -->
                                                                                    <li><label class="lbl" for="nodejs1"><input type="checkbox" class="b" id="nodejs1"> Node.js</label></li>
                                                                                   <!--  <li><label class="lbl" for="javascript1"><input type="checkbox" class="b" id="javascript1">Javascript</label></li>
                                                                                    <li><label class="lbl" for="css1"><input type="checkbox" class="b" id="css1">CSS</label></li>
                                                                                    <li><label class="lbl" for="css31"><input type="checkbox" class="b" id="css31">CSS3</label></li> -->
                                                                                    <li><label class="lbl" for="html51"><input type="checkbox" class="b" id="html51"> HTML5</label></li>
                                                                                    <li><label class="lbl" for="angularjs1"><input type="checkbox" class="b" id="angularjs1"> Angularjs</label></li>
                                                                                    <li><label class="lbl" for="reactjs1"><input type="checkbox" class="b" id="reactjs1"> React.js</label></li>
                                                                                    <li class="divider"></li>
                                                                                    <hr>
                                                                                    <li> <center><a class="btn btn-success" data-toggle="collapse" href="#collapse2" style="margin-bottom: 20px;">Submit Quality</a></center></li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <script type="text/javascript">
                                                                        if($("#selectedQuality").html().length < 3)
                                                                        {
                                                                           $("#selectedQuality").html("Company Quality"); 
                                                                        }
                                                                        $("input.b").change(function(){
                                                                            console.log($(this));
                                                                            var line = ($("#selectedQuality").html()).replace("Company Quality","");
                                                                            if($(this).is(":checked")) { 
                                                                                  line += "<b class='skill1' id='"+ ($(this).closest('label').text()).replace(" ", "").replace(".", "").toLowerCase()+ '1' +"'><a style='font-size:14px;margin-right:5px;' onclick='removeQuality($(this))' class='glyphicon glyphicon-remove'></a>"+$(this).closest('label').text() + "</b>";
                                                                                  $("#selectedQuality").html(line);
                                                                                }
                                                                            else {
                                                                                var t_id = ($(this).closest('label').text()).replace(" ", "").replace(".", "").toLowerCase()+'1';
                                                                                $('b#'+t_id).remove();
                                                                                if($("#selectedQuality").html().length < 3)
                                                                                {
                                                                                   $("#selectedQuality").html("Company Quality"); 
                                                                                }
                                                                            } 
                                                                        });
                                                                        $(".lbl").click(function(){
                                                                            console.log($(this).text());
                                                                                if(($(this).closest('input.b')).is(":checked")) { 
                                                                                ($(this).closest('input.b')).prop('checked',false);
                                                                            }
                                                                            else {
                                                                                ($(this).closest('input.b')).prop('checked',true);
                                                                            }
                                                                        });
                                                                        function removeQuality(sp){
                                                                            sp.closest('b').remove();
                                                                            var c_id = sp.closest('b').attr('id');
                                                                            console.log(c_id);
                                                                            console.log(($("input[type=checkbox]#"+c_id)).attr('id'));
                                                                            $("input[type=checkbox]#"+c_id).prop('checked', false);
                                                                        }
                                                                        //  function aero(){
                                                                        //     if($('#aero').css.z-index == -1){
                                                                        //        $('#aero').css.z-index == 1;
                                                                        //     }
                                                                        //     else { 
                                                                        //         $('#aero').css.z-index == -1;
                                                                        //     } 
                                                                        //     console.log($('#aero'.css.z-index));
                                                                            
                                                                        // }
                                                                    </script>
                                                            </div>
                                                            </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-5 ">
                                                            <div class="table-top-border-90 ">
                                                            </div>
                                                        </div>                                                  
                                                            <div class="row">
                                                                <div class="col-md-12 col-sm-12 col-xs-12">
                                                                    <label class="control-label ">Payment Plan </label>
                                                                        <div class="tab-content ">
                                                                            <div class="tab-block mb25">
                                                                                <div class="row">
                                                                                    <ul class="nav nav-tabs tabs-border ">
                                                                                        <li class=" ">
                                                                                          <a href="#tab11_1" data-toggle="tab" aria-expanded="false" class="payment_tag" data-tag-value=1><i class="fa fa-money"></i> Fix</a>
                                                                                        </li>
                                                                                        <li class=" ">
                                                                                           <a href="#tab11_2" data-toggle="tab" aria-expanded="true" class="payment_tag" data-tag-value=2><i class="fa fa-hourglass-half"></i>Hourly</a>
                                                                                        </li>
                                                                                        <li class=" ">
                                                                                            <a href="#tab11_3" data-toggle="tab" aria-expanded="true" class="payment_tag" data-tag-value=3><i class="fa fa-handshake-o"></i>Agreement</a>
                                                                                        </li>
                                                                                    </ul>
                                                                                </div>
                                                                                <input type="hidden" id="payment_type" name="payment_type">
                                                                                <div class="tab-content ">
                                                                                    <div id="tab11_1" class="tab-pane">
                                                                                        <div class="row ">
                                                                                            <div class="col-md-12 col-sm-12 col-xs-12 ">
                                                                                                <div class="col-md-12">
                                                                                                    <label class="control-label">Budget by fix</label>
                                                                                                </div>
                                                                                                <div class="row ">
                                                                                                    <div class="col-md-12 col-sm-12 col-xs-12 ">
                                                                                                        <div class="input-icon-left col-md-8 col-sm-8 col-xs-12">
                                                                                                            <input class="form-control" placeholder="00,00 " type="text" name="buget_account">
                                                                                                            <i class="fa fa-euro "></i>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="col-md-12">
                                                                                                    <label class="control-label">Payouts</label>
                                                                                                </div>
                                                                                                <div class="row">
                                                                                                    <div class="col-md-4 col-sm-4 col-xs-12 ">
                                                                                                        <div class="radio-style ">
                                                                                                            <div class="radio-style-box ">
                                                                                                                <input type="radio" name="Budget" class="input-hidden" value="0"/>
                                                                                                                <label>Fix</label>
                                                                                                            </div>
                                                                                                            <div class="radio-style-box ">
                                                                                                                <input type="radio" name="Budget" class="input-hidden " value="1"/>
                                                                                                                <label>Agreement</label>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div id="tab11_2" class="tab-pane">
                                                                                        <div class="row ">
                                                                                            <div class="col-md-12 col-sm-12 col-xs-12 ">
                                                                                                <div class="col-md-12 col-sm-12 col-xs-12">
                                                                                                    <label class="control-label ">Budget Hourly</label>
                                                                                                </div>
                                                                                                <div class="row ">
                                                                                                    <div class="col-md-4 col-sm-4 col-xs-12 ">
                                                                                                        <div class="input-icon-left ">
                                                                                                            <input class="form-control" placeholder="How much Hours " type="text" name="hourly_time">
                                                                                                            <i class="fa fa-clock-o "></i>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="col-md-4 col-sm-4 col-xs-12 ">
                                                                                                        <div class="input-icon-left ">
                                                                                                            <input class="form-control" placeholder="Price each Hour " type="text " name="hourly_rate"><i class="fa fa-euro "></i> 
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="col-md-12 col-sm-12 col-xs-12">
                                                                                                    <label class="control-label ">Payout</label>
                                                                                                </div>
                                                                                                <div class="row">
                                                                                                    <div class="col-md-4 col-sm-4 col-xs-12 ">
                                                                                                        <div class="radio-style ">
                                                                                                            <div class="radio-style-box ">
                                                                                                                <input type="radio" name="Budget" class="input-hidden" value="0"/>
                                                                                                                <label>Fix</label>
                                                                                                            </div>
                                                                                                            <div class="radio-style-box ">
                                                                                                                <input type="radio" name="Budget" class="input-hidden " value="1"/>
                                                                                                                <label>Agreement</label>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div id="tab11_3" class="tab-pane">
                                                                                        <div class="row ">
                                                                                            <div class="col-md-12 col-sm-12 col-xs-12 ">
                                                                                                <div class="row ">
                                                                                                    <div class="col-md-12"><label class="control-label">Agreement</label>
                                                                                                    </div>
                                                                                                    <div class="col-md-4 col-sm-4 col-xs-12 ">
                                                                                                        <div class="radio-style ">
                                                                                                            <div class="radio-style-box ">
                                                                                                                <input type="radio" name="Budget" class="input-hidden" value="0"/>
                                                                                                                <label>Fix</label>
                                                                                                            </div>
                                                                                                            <div class="radio-style-box ">
                                                                                                                <input type="radio" name="Budget" class="input-hidden " value="1"/>
                                                                                                                <label>Agreement</label>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div id="tab11_4" class="tab-pane ">
                                                                                        <p>
                                                                                            <b>TAB FOUR - </b>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf VHS.
                                                                                        </p>
                                                                                    </div>
                                                                                    <div class="col-md-5 ">
                                                                                        <div class="table-top-border-90 ">
                                                                                        </div>
                                                                                    </div>         
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                </div>
                                                            </div>
                                                            <ul>
                                                                <li class="row" style="font-size: 20px;width:100%;background-color: #373942;width: 100%;margin-left:-20px;margin-right: -30px;color:white;">
                                                                <button type="button" class="prev-step"  style="background-color: #6cb5f3;height: 100%;border:1px #6cb5f3 solid;width:200px;float: left;">Previous</button>
                                                                <button type="button" class="next-step" style="background-color: #6cb5f3;height: 100%;border:2px #6cb5f3 solid;width:200px;float: right;margin-right: -40px;">Next</button>
                                                                </li>
                                                            </ul>
                                                    </div>
                                                    <div class="tab-pane" role="tabpanel" id="Publish">
                                                        <div class="green" style="background-color: #97be2e;text-align: center;color:white;">
                                                            <p style="color:white;font-size:24px;padding-top:8px;padding-bottom:3px;">View Job Offer
                                                            </p>
                                                        </div>
                                                        <div style="font-size:1.1vw;padding:10px;text-align: center;">
                                                            <span style="background-color: #ededed;padding:5px 10px;width:6vw;">Offer Type</span>
                                                            <span style="padding:5px;width:6vw;">Verbindlich</span>
                                                            <span style="background-color: #ededed;padding:5px;width:6vw;">Contract Type</span>
                                                            <span style="padding:5px;width:6vw;">Standard</span>
                                                            <span style="background-color: #ededed;padding:5px;width:6vw;">Offer Duration</span>
                                                            <span style="padding:5px;width:6vw;">2 weeks</span>
                                                            <span style="background-color: #ededed;padding:5px;width:6vw;">Warranty</span>
                                                            <span style="padding:5px;width:6vw;">3 Months</span>
                                                            <span style="background-color: #ededed;padding:5px;width:6vw;">Offer ID</span>
                                                            <span style="padding:5px;width:6vw;">OF-10032</span>
                                                        </div>
                                                        <div style="background-color: #97be2e;height: 5px;" class="col-md-12">
                                                        </div>

                                                        <div class="col-md-12 col-lg-12 col-xs-12 nopadding">

                                                            <div class="gureny" style="border-top: #336699 5px solid;">
                                                                <div class="title">
                                                                        <h2>Offer Desc</h2>
                                                                </div>
                                                                    <br>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                                <div class="table-top-border-90">
                                                                </div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-md-12 col-lg-12 col-xs-12">
                                                                <p>Hello there,</p>
                                                                <p>I´m Planing my Birthday with Family and Friends and i´m
                                                                    looking for a Partyservice who can Deliver us with
                                                                    Drinks and Food .. I´m Planing my Birthday with Family
                                                                    and Friends and i´m looking for a Partyservice who
                                                                    can Deliver us with Drinks and Food .. I´m Planing
                                                                    my Birthday with Family and Friends and i´m looking
                                                                    for a Partyservice who can Deliver us with Drinks
                                                                    and Food .. I´m Planing my Birthday with Family and
                                                                    Friends and i´m looking for a Partyservice who can
                                                                    Deliver us with Drinks and Food
                                                                </p>
                                                            </div>
                                                            <div class="col-md-12 col-lg-12 col-xs-12">
                                                                <div class="gureny">
                                                                    <div class="title">
                                                                        <h2>Project files</h2>
                                                                    </div>
                                                                    <br>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <hr>
                                                        <div class="container">
                                                            <div class="notice notice-success">
                                                                <div class="row">
                                                                    <div class="col-md-3">
                                                                        <img src="<?php echo site_url()?>assets/img/s1.png" style="margin-right:220px;">
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <strong>Project</strong> Desc.
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        2 MB
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <button type="button" class="btn ladda-button btn-success progress-button" data-style="expand-left" style="width:120px;">Seen</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="notice notice-danger">
                                                                <div class="row">
                                                                    <div class="col-md-3">
                                                                        <img src="<?php echo site_url()?>assets/img/s2.png" style="margin-right:220px;">
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <strong>Project</strong> Desc.
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        2 MB
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <button type="button" class="btn ladda-button btn-danger progress-button" data-style="expand-left" style="width:120px;">Unseen</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="notice notice-danger">
                                                                <div class="row">
                                                                    <div class="col-md-3">
                                                                        <img src="<?php echo site_url()?>assets/img/ppt.png" style="margin-right:220px;">
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <strong>Project</strong> Desc.
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        2 MB
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <button type="button" class="btn ladda-button btn-danger progress-button" data-style="expand-left" style="width:120px;">Unseen</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="notice notice-danger">
                                                                <div class="row">
                                                                    <div class="col-md-3">
                                                                        <img src="<?php echo site_url()?>assets/img/video-player.png" style="margin-right:220px;">
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <strong>Project</strong> Desc.
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        2 MB
                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <button type="button" class="btn ladda-button btn-danger progress-button" data-style="expand-left" style="width:120px;">Unseen</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12 col-lg-12 col-xs-12 nopadding">
                                                                <div class="gureny">
                                                                    <div class="title">
                                                                        <h2>Porject Task</h2>
                                                                    </div>
                                                                    <br>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <hr>
                                                        <div class="container">
                                                            <div class="notice notice-success">
                                                                <strong>Change</strong> Background
                                                                <div style="float: right;margin-right:100px;">
                                                                    <a class="glyphicon glyphicon-ok-circle" style="color:#97be2e;font-size:32px;"></a>
                                                                </div>
                                                                <button class="btn btn-success" style="font-color:white;font-size:16px;margin-right: 100px;width:160px;text-align: center;float:right;">Accepted</button>
                                                            </div>
                                                            <div class="notice notice-success">
                                                                <strong>Change</strong> Background
                                                                <div style="float: right;margin-right:100px;">

                                                                    <a class="glyphicon glyphicon-ok-circle" style="color:#97be2e;font-size:32px;"></a>
                                                                </div>
                                                                <button class="btn btn-success" style="font-color:white;font-size:16px;margin-right: 100px;width:160px;text-align: center;float:right;">Accepted</button>
                                                            </div>
                                                            <div class="notice notice-success">
                                                                <strong>Change</strong> Background
                                                                <div style="float: right;margin-right:100px;">

                                                                    <a class="glyphicon glyphicon-ok-circle" style="color:#97be2e;font-size:32px"></a>
                                                                </div>
                                                                <button class="btn btn-success" style="font-color:white;font-size:16px;margin-right: 100px;width:160px;text-align: center;float:right;">Accepted</button>
                                                            </div>

                                                            <div class="notice notice-danger">
                                                                <strong>Change</strong> Background

                                                                <div style="float: right;margin-right:100px;">
                                                                    <a class="glyphicon glyphicon-ban-circle" style="color:red;font-size:32px;"></a>
                                                                </div>
                                                                <button class="btn btn-danger" style="font-color:white;font-size:16px;margin-right: 100px;width:160px;text-align: center;float: right;">Denied Reason</button>
                                                            </div>
                                                            <br>
                                                            <div class="col-md-12 col-lg-12 col-xs-12 nopadding">

                                                                <div class="gureny">
                                                                    <div class="title">
                                                                        <h2>Our Skill</h2>
                                                                    </div>
                                                                    <br>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <hr>
                                                        <div class="container">
                                                            <div class="row">
                                                                <div class="col-sm-2">
                                                                    <div class="notice notice-success">
                                                                        <strong>On Time</strong>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-2">
                                                                    <div class="notice notice-success">
                                                                        <strong>Zuverlässig</strong>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-2">
                                                                    <div class="notice notice-success">
                                                                        <strong>Erfahren</strong>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-2">
                                                                    <div class="notice notice-success">
                                                                        <strong>On Time</strong>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-2">
                                                                    <div class="notice notice-success">
                                                                        <strong>Zuverlässig</strong>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-sm-2">
                                                                    <div class="notice notice-success">
                                                                        <strong>Erfahren</strong>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-2">
                                                                    <div class="notice notice-success">
                                                                        <strong>Zuverlässig</strong>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-2">
                                                                    <div class="notice notice-success">
                                                                        <strong>Erfahren</strong>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-2">
                                                                    <div class="notice notice-success">
                                                                        <strong>On Time</strong>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-2">
                                                                    <div class="notice notice-success">
                                                                        <strong>Zuverlässig</strong>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <br>
                                                            <br>
                                                            <div class="col-md-12 col-lg-12 col-xs-12 nopadding">

                                                                <div class="gureny">
                                                                    <div class="title">
                                                                        <!-- <h2>Extras</h2> -->
                                                                        <h2>Work Start</h2>
                                                                    </div>
                                                                    <br>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <hr class="mrgn10-0">
                                                        <div class="container">
                                                            <div class="notice notice-success">
                                                                <div class="row">
                                                                    <div class="col-md-6" style="text-align: center;">
                                                                        <b>Start Date <br> 10,12,2017</b>
                                                                    </div>
                                                                    <div class="col-md-6" style="border-left: 1px black solid;text-align: center;">
                                                                        <strong style="">Work Delivery<br>12.12.2017</strong>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!--  <div class="col-sm-4">
                                                                    <div class="notice notice-success">
                                                                        <strong>Deliver Date :  Date</strong>
                                                                    </div>
                                                                </div> -->
                                                            <!-- <div class="col-sm-4">
                                                                    <div class="notice notice-success">
                                                                        <strong>Extras</strong>
                                                                    </div>
                                                                </div> -->
                                                            <br>
                                                            <div class="col-md-12 col-lg-12 col-xs-12 nopadding">

                                                                <div class="gureny">
                                                                    <div class="title">
                                                                        <h2>Payment</h2>
                                                                    </div>
                                                                    <br>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <hr class="mrgn10-0">
                                                        <div class="container">
                                                            <div class="notice notice-success">
                                                                <div class="row">
                                                                    <div class="col-md-3" style="text-align: center;">
                                                                        <b>Budget Type</b> <br> Fix/Hourly/Agree
                                                                    </div>
                                                                    <div class="col-md-3" style="border-left: 1px black solid;text-align: center;">
                                                                        <strong style="">Price</strong><br>2000,-
                                                                        <span
                                                                            class="glyphicon glyphicon-euro"></span>
                                                                    </div>
                                                                    <div class="col-md-3" style="border-left: 1px black solid;text-align: center;">
                                                                        <b>Price Type</b><br>Fix/Agreement
                                                                    </div>
                                                                    <div class="col-md-3" style="border-left: 1px black solid;text-align: center;">
                                                                        <strong style="">Payout</strong><br>After Finish/Agreement
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                        <div class="container"><center>
                                                            <div style="width:320px;border:2px #79be2e solid;border-radius: 24px;padding:5px;text-align: center;align-self: center; margin-top:30px;margin-bottom: 20px;"   data-toggle="modal" data-target="#myModal">
                                                                <input type="checkbox" id="agree_policy" style="margin-left:10px;vertical-align: middle;font-size:20px;width:16px;height: 16px;margin-right: 30px;">

                                                                <a style="vertical-align: middle;font-size: 18px;" for="agree_policy">Accept Police and Terms</a>
                                                            </div>
                                                            </center>
                                                        </div>
                                                        <div class="saprator"></div>
                                                        <hr>
                                                        <ul>
                                                            <li class="row" style="font-size: 20px;width:100%;background-color: #373942;width: 100%;margin-left:-20px;margin-right: -30px;color:white;">
                                                            <button type="button" class="prev-step"  style="background-color: #6cb5f3;height: 100%;border:1px #6cb5f3 solid;width:200px;float: left;">Back</button>
                                                            <button type="submit" class="next-step" style="background-color: #6cb5f3;height: 100%;border:2px #6cb5f3 solid;width:300px;float: right;margin-right: -40px;">Publish Now</button>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="tab-pane " role="tabpanelss" id="complete">
                                                        <div class="thanks">
                                                            <h3>Thankyou</h3>
                                                            <p>You have successfully completed all steps.</p>
                                                        </div>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                </div>
                                            </form>
                                            </div>
                                        </div>
                                    </div>
                                    <footer class="hidden-sm hidden-xs ">
                                        <div class="container
                                                                        ">
                                            <div class="row ">
                                                <div class="col-sm-12 col-xs-12 ">
                                                    <div class="pull-left">
                                                        <p> ALL RIGHTS RESERVED. COPYRIGHT © Heroic Technologies 2017. </p>
                                                    </div>
                                                    <div class="pull-right ">
                                                        <ul class="footer-social
                                                                        ">
                                                            <li><a href="post-job.html#"><i class="fa fa-facebook
                                                                        " aria-hidden="true"></i></a></li>
                                                            <li><a href="post-job.html#"><i class="fa fa-twitter " aria-hidden="true"></i></a></li>
                                                            <li><a href="post-job.html#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                                            <li><a href="post-job.html#"><i class="fa fa-google-plus " aria-hidden="true"></i></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </footer>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <footer class="visible-sm visible-xs">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-xs-12 ">
                        <div class="pull-left">
                            <p> ALL RIGHTS RESERVED. COPYRIGHT © Heroic Technologies 2017. </p>
                        </div>
                        <div class="pull-right ">
                            <ul class="footer-social
                                                                        ">
                                <li><a href="post-job.html#"><i class="fa fa-facebook
                                                                        " aria-hidden="true "></i></a></li>
                                <li><a href="post-job.html#"><i class="fa fa-twitter " aria-hidden="true
                                                                        "></i></a></li>
                                <li><a href="post-job.html#"><i class="fa fa-instagram
                                                                        " aria-hidden="true "></i></a></li>
                                <li><a href="post-job.html#"><i class="fa fa-google-plus " aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <div class="modal fade " id="img-pop" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-md">
                <div class="modal-content ">
                    <div class="modal-header"><button type="button" class="close" data-dismiss="modal" aria-hidden="true"> ×</button>
                        <h4 class="modal-title" id="myModalLabel"> Add your project image annd detail here </h4>
                    </div>
                    <div class="modal-body ">
                        <div class="row ">
                            <div class="col-md-12">
                                <form>
                                    <div class="tab-header ">
                                        <ul>
                                            <li class="active"><a href="post-job.html#image" data-toggle="tab" class="tab-btn">image</a></li>
                                            <li><a href="post-job.html#detail" data-toggle="tab " class="tab-btn ">Title</a></li>
                                            <li><a href="post-job.html#desc" data-toggle="tab " class="tab-btn">Description</a></li>
                                        </ul>
                                    </div>
                                    <div class="tab-content ">
                                        <div class="tab-pane active " id="image">
                                            <div class="img-pop-data"><label class="upload-bg">add your Project Image here</label>
                                                <div class="multi-img ">
                                                    <div class="fileupload fileupload-new" data-provides="fileupload">
                                                        <div class="fileupload-preview thumbnail"></div><br><span class="btn btn-default btn-file svgimg "> <span class="fileupload-new"><img src="<?php echo site_url()?>assets/img/upload.png "/></span> <span class="fileupload-exists">Change</span><input type="file"></span> <a href="post-job.html#"
                                                            class="btn btn-default fileupload-exists " data-dismiss="fileupload"><i class="fa fa-close
                                                                        "></i></a> </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="detail">
                                            <div class="img-pop-data
                                                                        "><label class="upload-bg
                                                                        ">add your Project Title here</label>
                                                <div class="multi-img "><input type="text " class="form-control
                                                                        " placeholder=" Project Title " /></div>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="desc">
                                            <div class="img-pop-data"><label class="upload-bg
                                                                        ">add your Project detail here</label>
                                                <div class="multi-img"><textarea class="form-control
                                                                        " placeholder=" Project detail here "></textarea>
                                                    <div class="clearfix
                                                                        "></div><button type="submit " class="btn btn-primary pull-right
                                                                        ">Submit</button></div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade " id="langmodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog " role="document
                                                                        ">
                <div class="modal-content " style="height: 340px;">
                    <div class="modal-header
                                                                        "><button type="button " class="close " data-dismiss="modal
                                                                        " aria-label="Close "><span aria-hidden="true
                                                                        ">×</span></button>
                        <h4 class="modal-title " id="myModalLabel
                                                                        ">Select your Favorite Language</h4>
                    </div>
                    <div class="modal-body text-center ">
                        <a href="post-job.html#
                                                                        " class="flags activeflag ">
                            <div class="flag-icon flag-icon-us
                                                                        flag-big "></div><br>English<span><i class="fa fa-fw
                                                                        fa-check-circle "></i></span></a>
                        <a href="post-job.html#
                                                                        " class="flags ">
                            <div class="flag-icon flag-icon-in flag-big
                                                                        "></div><br>Hindi<span><i class="fa fa-fw fa-check-circle "></i></span></a>
                        <a href="post-job.html#
                                                                        " class="flags ">
                            <div class="flag-icon flag-icon-ch flag-big
                                                                        "></div><br>China<span><i class="fa fa-fw fa-check-circle "></i></span></a>
                        <a href="post-job.html#
                                                                        " class="flags ">
                            <div class="flag-icon flag-icon-af flag-big
                                                                        "></div><br>Afria<span><i class="fa fa-fw fa-check-circle
                                                                        "></i></span></a>
                    </div>
                </div>
            </div>
        </div>
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content" style="height: 520px;">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        Policy and Terms
      </div>
      <div class="modal-body popsup">
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
      
      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p></div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">I Agree</button>
      </div>
    </div>

  </div>
</div>

        <script type="text/javascript">
        $(function() {
            $('iframe').bind('mousewheel scroll click', function(e) {
                console.log('iframe wheel');
                console.log(e);
            });
        });
        </script>
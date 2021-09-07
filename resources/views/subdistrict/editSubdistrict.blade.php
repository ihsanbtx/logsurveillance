
                       <!--begin::Body-->
                            <div class="card-body p-0">
                                <div class="row justify-content-center py-8 px-8 py-lg-5 px-lg-0">
                                    <div class="col-xl-12 col-xxl-10">
                                        <!--begin::Wizard Form-->
                                            {{ Form::open(['url' => '/updateSubdistrict', 'id' => 'editSubdistrict']) }}
                                            <div class="row justify-content-center">
                                                <div class="col-xl-9">
                                                    <!--begin::Wizard Step 1-->
                                                    <div class="my-5 step" data-wizard-type="step-content" data-wizard-state="current">
                                                        <!--end::Group-->
                                                        <!--begin::Group-->
                                                        <div class="form-group row">
                                                            <label class="col-xl-3 col-lg-3 col-form-label">Subdistrict Name</label>
                                                            <div class="col-lg-9 col-xl-9">
                                                                {{ Form::text('subdistrictName', $data->subdistrictName,['class' => 'form-control form-control-solid form-control-lg', 'placeholder'=>'Subdistrict Name', 'required'=>'yes', 'id' => 'subdistrictName']) }}
                                                            </div>
                                                        </div>
                                                        <!--end::Group-->
                                                        
                                                    </div>
                                                    <!--end::Wizard Step 1-->
                                                    
                                                    </div>
                                            </div>
                                            <input type="hidden" name="_id" value="{{$data->_id}}">
                                        {{ Form::close() }}
                                        <!--end::Wizard Form-->
                                    </div>
                                </div>
                            </div>
                            <!--end::Body-->
    



<!--begin::Page Scripts(used by this page)-->
<script src="{{asset('js/pages/custom/formsettings/edit-subdistrict.js')}}"></script>
<!--end::Page Scripts-->
<script type="text/javascript">


</script>
                    
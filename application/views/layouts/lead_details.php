<?php
$this->load->view('layouts/header');
?>




<!-- partial -->
<div class="container-fluid page-body-wrapper">
  <div class="main-panel">
    <div class="content-wrapper pb-0">
      <div class="page-header flex-wrap">
        <div class="header-right d-flex flex-wrap mt-md-2 mt-lg-0">
          <div class="d-flex align-items-center">
            <div class="header-left">
              <div class="d-flex align-items-left">
                <h5 class="m-0 pr-3" style="padding:5px">Dashboard </h5>
                <a href="<?php echo base_url('ImportExport') ?>">
                  <button type="button" class="btn btn-primary mt-2 mt-sm-0 btn-icon-text" style="background-color:#B0CB1F">
                    <i class="mdi mdi-arrow-right-bold-circle" style=" background:#7b8f0e;"></i>Import bulk lead </button> </a>
              </div>
            </div>
          </div>
        </div>

        <div class="header-right d-flex flex-wrap mt-md-2 mt-lg-0">
          <div class="d-flex align-items-center">
            <div class="header-right">
            </div>
          </div>
          <a href="<?php echo base_url('home/create_lead') ?>">
            <button type="button" class="btn btn-primary mt-2 mt-sm-0 btn-icon-text" style="background-color:#B0CB1F">
              <i class="mdi mdi-plus-circle" style=" background:#7b8f0e;"></i> Create a lead </button>
          </a>

        </div>
      </div>
      <!---- start-->
      <br />


      <?php
      if ($this->session->flashdata('success')) :
      ?>
        <div class="alert alert-success alert-dismissible">
          <button type="button" class="close" data-dismiss="alert">&times;</button>
          <?php

          echo ($this->session->flashdata('success')); ?>

        </div>
      <?php endif; ?>


      <div class="row">
        <div class="col-md-6 grid-margin stretch-card">
          <div class="card1">
            <div class="card-body">
              <h4 class="card-title" style="text-align:center">Lead Information</h4>

              <hr /><br />
              <div class="row">
                <div class="col-md-6">
                  <p><strong>Lead ID:</strong> &nbsp;&nbsp;
                    <?php
                    echo  'DLMS' . $lead->id;
                    ?>              
                  </p>
                </div>

                <div class="col-md-6 ">
                  <p><strong>Created Date:</strong>&nbsp;&nbsp;
                    <?php
                    $date = $lead->created_at;
                    echo date("d F, Y", strtotime($date));
                    ?></p>
                </div>
                <div class="col-md-6 ">
                  <p><strong>Company:</strong>&nbsp;&nbsp;
                    <?php echo $lead->company; ?>
                  </p>
                </div>

                <div class="col-md-6 ">
                  <p><strong>Lead Source:</strong>&nbsp;&nbsp;
                    <?php
                    echo $lead->lead_source;
                    ?></p>
                </div>


                <div class="col-md-6 ">
                  <p><strong> Date:</strong>&nbsp;&nbsp;
                    <?php
                    echo $lead->date_of_inquiry;
                    ?></p>
                </div>


                <div class="col-md-6 ">
                  <p><strong>Lead Status:</strong>&nbsp;&nbsp;
                    <?php
                    echo $lead->s_name;
                    ?></p>
                </div>



                <div class="col-md-6 ">
                  <p><strong> Updated Date:</strong>&nbsp;&nbsp;
                    <?php
                    $date = $lead->updated_at;
                    echo date("d F, Y", strtotime($date));

                    ?></p>
                </div>

              </div>

            </div>
          </div>
        </div>


        <div class="col-md-6 grid-margin stretch-card">
          <div class="card1">
            <div class="card-body">
              <h4 class="card-title" style="text-align:center">Contact Information</h4>


              <hr />

              <div class="row">


                <div class="col-md-6 ">
                  <p><strong> Name:</strong>&nbsp;&nbsp;
                    <?php
                    echo $lead->name;

                    ?></p>
                </div>


                <div class="col-md-6 ">
                  <p><strong> Phone:</strong>&nbsp;&nbsp;
                    <?php
                    echo $lead->phone;

                    ?></p>
                </div>

                <div class="col-md-6 ">
                  <p><strong> City:</strong>&nbsp;&nbsp;
                    <?php
                    echo $lead->city;

                    ?></p>
                </div>

                <div class="col-md-6 ">
                  <p><strong> Website:</strong>&nbsp;&nbsp;
                    <?php
                    echo $lead->website;
                    ?></p>
                </div>

                <div class="col-md-12 ">
                  <p><strong>Email:</strong>&nbsp;&nbsp;
                    <?php
                    echo $lead->email;

                    ?></p>
                </div>


                <div class="col-md-12 ">
                  <p><strong> Address:</strong>&nbsp;&nbsp;
                    <?php
                    echo $lead->address;

                    ?></p>
                </div>

              </div>
              <br />

              <h4 class="card-title" style="text-align:center">Additional Information</h4>


              <hr />
              <div class="row">
                <div class="col-md-12 ">
                  <p><strong>Official Email Id :</strong>&nbsp;&nbsp;
                    <?php
                    echo  $lead->official_email_id;

                    ?></p>
                </div>



                <div class="col-md-12 ">
                  <p><strong> Description:</strong>&nbsp;&nbsp;
                    <?php
                    echo $lead->description;
                    ?></p>
                </div>
              </div>







            </div>
          </div>
        </div>

      </div>



      <!------- Remark Start ------->


      <div class="col-xl-12 grid-margin stretch-card">
        <div class="card ol-xl-12 ">

          <div class="card-body">
            <div class="text-center">
              <button type="submit" class="btn btn-#B0CB1F mr-2" style="background-color:#B0CB1F;color:#ffffff; margin-left:80%" data-toggle="modal" data-target="#exampleModal-5"> + Add Remark</button>
            </div>
            <br />
            <div class="row">
              <div class="modal fade" id="exampleModal-5" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel-5" aria-hidden="true">

                <div class="modal-dialog" role="document">

                  <div class="modal-content" style="padding: 10px;">

                    <form action="<?php echo base_url(); ?>home/add_remark/<?php echo $lead->id; ?>" method="post">

                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel-5"> Add Remark</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>

                      <div class="col-xl-12 justify-content-center">


                        <div class="form-group">
                          <input class="form-control" type="hidden" name="lead_id" value="<?php echo $lead->id; ?>">
                        </div>


                        <div class="row">
                          <div class="col-md-3">

                            <div class="form-check form-check-flat form-check-primary ">
                              <label class="form-check-label">
                                <input type="checkbox" name="follow_up[]" class="form-check-input" value="Call">Call</label>
                            </div>
                          </div>

                          <div class="col-md-3">
                            <div class="form-check form-check-flat form-check-primary ">
                              <label class="form-check-label">
                                <input type="checkbox" name="follow_up[]" class="form-check-input" value="Email">Email</label>
                            </div>
                          </div>
                          <div class="col-md-3">
                            <div class="form-check form-check-flat form-check-primary ">
                              <label class="form-check-label">
                                <input type="checkbox" name="follow_up[]" class="form-check-input" value="Message">Message</label>
                            </div>
                          </div>
                        </div>
                      </div>

                      <hr />

                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">
                            <label class="col-sm-6 col-form-label">Date</label>
                            <input class="form-control" type="date" name="follow_up_date" value="<?php echo date('Y-m-d'); ?>" required>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label class="col-sm-6 col-form-label">Time</label>
                            <input class="form-control" type="time" name="follow_up_time" value="<?php echo date('H:i'); ?>" required>
                          </div>
                        </div>
                      </div>



                      <div class="form-group">
                        <label class="col-sm-3 col-form-label">Lead Status</label>

                        <select class="form-control" name="lead_status" required>
                          <option value="">--- Select ----</option>

                          <?php foreach ($lead_status as $employees) : ?>
                            <option value="<?php echo $employees->id; ?>">
                              <?php
                              echo $employees->name;
                              ?>
                            </option>
                          <?php endforeach ?>

                        </select>

                      </div>


                      <div class="form-group">
                        <label class="col-sm-3 col-form-label">Remark</label>
                        <textarea type="text" name="remark" placeholder="Type Here...." class="form-control"></textarea>

                      </div>

                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <input type="submit" name="insert" value="Submit" class="btn btn-primary">
                      </div>

                    </form>
                  </div>
                </div>
              </div>
            </div>

            <h4 class="card-title">Remark Lists</h4>

            <!-- <p class="card-description"> Custom HTML inside alert </p> -->



            <?php

            if (!empty($lead_remarks)) {

              foreach ($lead_remarks as $lead) :

            ?>


                <div class="card card-inverse-secondary mb-5">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-md-4 ">
                        <p><strong> Lead Id:</strong>&nbsp;&nbsp;
                          <?php
                          echo 'DLMS' . $lead->lead_id;
                          ?>
                        </p>
                      </div>


                      <div class="col-md-4 ">
                        <p><strong> Date:</strong>&nbsp;&nbsp;
                          <?php
                          $date = $lead->follow_up_date;
                          echo date("d F, Y", strtotime($date));
                          ?>
                        </p>
                      </div>

                      <div class="col-md-4 ">
                        <p><strong> Time:</strong>&nbsp;&nbsp;
                          <?php
                          $myTime = $lead->follow_up_time;
                          echo date('g:i A ', strtotime($myTime));
                          ?>
                        </p>
                      </div>
                    </div>



                    <p><strong> Follow Up:</strong>&nbsp;&nbsp;

                      <?php
                      echo $lead->follow_up;
                      ?>




                    <p><strong> Remark:</strong>&nbsp;&nbsp;
                      <?php
                      echo $lead->remark;
                      ?>
                    </p>

                    <!-- <button class="btn btn-success mb-0 mb-xl-0">Edit</button> -->
                    <a href="<?php echo base_url(); ?>home/deleteRemark/<?php echo $lead->id; ?>/<?php echo $lead->lead_id; ?>">
                      <button type="submit" name="delete" value="Delete" onclick="return confirmDelete();" class="btn btn-#B0CB1F" style=" background:#B0CB1F;color:#ffffff" onclick="return confirmDelete();">Delete
                      </button></a>

                    <script type="text/javascript">
                      function confirmDelete() {
                        return confirm('Are you sure you want to delete this Remark?');
                      }
                    </script>
                    <hr />
                  </div>
                </div>


            <?php endforeach;
            } else {
              echo "There have no remarks";
            }

            ?>


          </div>
        </div>
      </div>

      <!--- lead details Remark Start-->





    </div>

  </div>

  <!-- Modal Ends -->

  <!--------end------>

</div>
</div>

<!---End Partials--->


</div>

<?php
$this->load->view('layouts/footer');
?>
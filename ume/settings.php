<div class="modal border" id="settings" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog modal-lg modal-dialog-scrollable" role="document">
      <div class="modal-content text-dynamic" style="border:none;background-color: transparent;">
         <div class="modal-header mod-head">
            <h5 class="modal-title" id="exampleModalLabel">Settings</h5>
            <ul class="navbar-nav mr-auto"></ul>
            <form class="form-inline my-2 my-lg-0">
               <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">&times;</span>
               </button>
            </form>
         </div>
         <div class="modal-body mod-body pl-3 pr-3">
            <ul class="nav nav-pills nav-fill" id="myTab" role="tablist">
               <li class="nav-item">
                  <a class="nav-link active" id="g-settings-tab" data-toggle="tab" href="#g-settings" role="tab" aria-selected="true">General Settings</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" id="pri-settings-tab" data-toggle="tab" href="#pri-settings" role="tab" aria-selected="false">Privacy Settings</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" id="pub-settings-tab" data-toggle="tab" href="#pub-settings" role="tab" aria-selected="false">Public Settings</a>
               </li>
            </ul>
            <div class="tab-content" id="myTabContent">
               <!-- General Settings -->
               <div class="tab-pane fade show active" id="g-settings" role="tabpanel" aria-labelledby="g-settings-tab">
                  <div class="p-3" style="font-size: 15px;">
                     <div class="row">
                        <div class="col-lg-4 col-sm-12">
                           <p class="font-weight-bold">Name</p>
                        </div>
                        <div class="col-lg-8 col-sm-12">
                           <form id="edit_name" method="post" enctype="multipart/form-data"  onsubmit="return;">
                              <span class="" id="bk_name"><?php echo $_SESSION["fullname"];?></span>
                              <input type="hidden" name="tag" value="UPDATE_FULL_NAME">
                              <input id="inp_fname" type="text" name="e_fname" class="mt-1 mb-1" required="" style="display: none; width: 80%" placeholder="First name" value="<?php echo $_SESSION["fname"];?>">
                              <input id="inp_mname" type="text" name="e_mname" class="mt-1 mb-1" style="display: none; width: 80%;" placeholder="Middle name (Optional)" value="<?php echo $_SESSION["mname"];?>">
                              <input id="inp_lname" type="text" name="e_lname" class="mt-1 mb-1" required="" style="display: none; width: 80%" placeholder="Last name" value="<?php echo $_SESSION["lname"];?>">
                              <input type="submit" style="visibility: hidden;">
                              <a href="#" id="e_name"><i class="fas fa-edit float-right" style="top: 0;"></i></a>
                           </form>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-lg-4 col-sm-12">
                           <p class="font-weight-bold">Contact</p>
                        </div>
                        <div class="col-lg-8 col-sm-12">
                           <form id="edit_number" method="post" enctype="multipart/form-data"  onsubmit="return;">
                              <span class="" id="bk_num"><?php echo $_SESSION['contact'];?></span>
                              <input type="hidden" name="tag" value="UPDATE_NUMBER">           
                              <input id="inp_number" type="text" name="e_number" class="mt-1 mb-1 " required="" style="display: none; width: 80%" placeholder="Contact number" value="<?php echo $_SESSION['contact'];?>">
                              <input type="submit" style="visibility: hidden;">
                              <a href="#" id="e_number"><i class="fas fa-edit float-right"></i></a>
                           </form>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-lg-4 col-sm-12">
                           <p class="font-weight-bold">Ad Account Contact</p>
                        </div>
                        <div class="col-lg-8 col-sm-12">
                           <form id="edit_email" method="post" enctype="multipart/form-data"  onsubmit="return;">
                              <span class="" id="bk_email"><?php echo $_SESSION['email'];?></span>
                              <input type="hidden" name="tag" value="UPDATE_EMAIL">           
                              <input id="inp_email" type="text" name="e_email" class="mt-1 mb-1 " required="" style="display: none; width: 80%" placeholder="Email" value="<?php echo $_SESSION['email'];?>">
                              <input type="submit" style="visibility: hidden;">
                              <a href="#" id="e_email"><i class="fas fa-edit float-right"></i></a>
                           </form>
                           
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-lg-4 col-sm-12">
                           <p class="font-weight-bold">Backup Contact</p>
                        </div>
                        <div class="col-lg-8 col-sm-12">
                           <form id="edit_sec_email" method="post" enctype="multipart/form-data"  onsubmit="return;">
                              <span id="bk_sec_email"><?php echo $_SESSION['email_contact'];?></span>
                              <input type="hidden" name="tag" value="UPDATE_EMAIL">           
                              <input id="inp_sec_email" type="text" name="e_sec_email" class="mt-1 mb-1 " required="" style="display: none; width: 80%" placeholder="Backup email" value="<?php echo $_SESSION['email_contact'];?>">
                              <input type="submit" style="visibility: hidden;">
                              <a href="#" id="e_sec_email"><i class="fas fa-edit float-right"></i></a>
                           </form>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- Privacy Settings -->
               <div class="tab-pane fade" id="pri-settings" role="tabpanel" aria-labelledby="pri-settings-tab">
                  <div class="p-3" style="font-size: 15px;">
                     <div id="general-settings" role="tablist">
                        <!-- Security and Login -->
                        <div class="card no-border bg-dynamic">
                           <div role="tab" id="headingOne">
                              <h5 class="mb-0">
                                 <a data-toggle="collapse" href="#sec-log" aria-expanded="false" aria-controls="sec-log" class="collapsed">
                                    <p>Security and Login</p>
                                 </a>
                              </h5>
                           </div>
                           <div id="sec-log" class="collapse" role="tabpanel" aria-labelledby="headingOne" style="">
                              <div class="card-body">
                                 <!-- Recommended -->
                                 <div id="recommended" role="tablist">
                                    <div class="card no-border bg-dynamic">
                                       <div role="tab" id="headingTwo">
                                          <h5 class="mb-0">
                                             <a data-toggle="collapse" href="#recom" aria-expanded="false" aria-controls="recom" class="collapsed">
                                                <p>Recommended</p>
                                             </a>
                                          </h5>
                                       </div>
                                       <div id="recom" class="collapse" role="tabpanel" aria-labelledby="headingOne" style="">
                                          <div class="card-body">
                                             <p>Get an alert when anyone logs into your account from an unrecognized device or browser.</p>
                                             <h6>Notification</h6>
                                             <div class="pr-3 pl-3">
                                                <input type="radio" id="get-notif" name="radio-notif" value="get-notif" checked="true">
                                                <label for="get-notif">Get notification</label><br>
                                                <input type="radio" id="not-notif" name="radio-notif" value="not-notif">
                                                <label for="not-notif">Don't get notification</label><br>
                                             </div>
                                             <h6>Messenger</h6>
                                             <div class="pr-3 pl-3">
                                                <input type="radio" id="notif-messenger" name="radio-messenger" value="notif-messenger" checked="true">
                                                <label for="notif-messenger">Get notification</label><br>
                                                <input type="radio" id="no-notif-messenger" name="radio-messenger" value="no-notif-messenger">
                                                <label for="no-notif-messenger">Don't get notification</label><br>
                                             </div>
                                             <h6>Email</h6>
                                             <div class="pr-3 pl-3">
                                                <input type="radio" id="notif-email" name="radio-email" value="notif-email" checked="true">
                                                <label for="notif-email">Get email notifitiocaiton</label><br>
                                                <input type="radio" id="no-notif-email" name="radio-email" value="no-notif-email">
                                                <label for="no-notif-email">Don't get email notifitiocaiton</label><br>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <!-- Where log in -->
                                 <div id="where-logged" role="tablist">
                                    <div class="card no-border bg-dynamic">
                                       <div role="tab" id="headingThree">
                                          <h5 class="mb-0">
                                             <a data-toggle="collapse" href="#w-logged" aria-expanded="false" aria-controls="w-logged" class="collapsed">
                                                <p>Where you're logged in</p>
                                             </a>
                                          </h5>
                                       </div>
                                       <div id="w-logged" class="collapse" role="tabpanel" aria-labelledby="headingOne" style="">
                                          <div class="card-body">
                                             <span>Windows PC - Marikina Philippines</span><a href="#" class="float-right">Remove from this device</a>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <!-- Login -->
                                 <div id="login-info" role="tablist">
                                    <div class="card no-border bg-dynamic">
                                       <div role="tab" id="headingThree">
                                          <h5 class="mb-0">
                                             <a data-toggle="collapse" href="#log-info" aria-expanded="false" aria-controls="log-info" class="collapsed">
                                                <p>Login</p>
                                             </a>
                                          </h5>
                                       </div>
                                       <div id="log-info" class="collapse" role="tabpanel" aria-labelledby="headingOne" style="">
                                          <div class="card-body">
                                             <h6>Change Password</h6>
                                             <div class="pr-3 pl-3">
                                                <div class="row">
                                                   <div class="col-lg-4 col-sm-12">
                                                      <span>Current Password</span>
                                                   </div>
                                                   <div class="col-lg-8 col-sm-12">
                                                      <input type="password" name="current-pass">
                                                   </div>
                                                </div>
                                                <div class="row">
                                                   <div class="col-lg-4 col-sm-12">
                                                      <span>New Password</span>
                                                   </div>
                                                   <div class="col-lg-8 col-sm-12">
                                                      <input type="password" name="new-pass">
                                                   </div>
                                                </div>
                                                <div class="row">
                                                   <div class="col-lg-4 col-sm-12">
                                                      <span>Re-type Password</span>
                                                   </div>
                                                   <div class="col-lg-8 col-sm-12">
                                                      <input type="password" name="re-pass">
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <!-- Privacy -->
                        <div class="card no-border bg-dynamic">
                           <div role="tab" id="headingOne">
                              <h5 class="mb-0">
                                 <a data-toggle="collapse" href="#log-set" aria-expanded="false" aria-controls="log-set" class="collapsed">
                                    <p>Privacy</p>
                                 </a>
                              </h5>
                           </div>
                           <div id="log-set" class="collapse" role="tabpanel" aria-labelledby="headingOne" style="">
                              <div class="card-body">
                                 <!-- Your activity -->
                                 <div id="recommended" role="tablist">
                                    <div class="card no-border bg-dynamic">
                                       <div role="tab" id="headingTwo">
                                          <h5 class="mb-0">
                                             <a data-toggle="collapse" href="#your-act" aria-expanded="false" aria-controls="your-act" class="collapsed">
                                                <p>Your Activity</p>
                                             </a>
                                          </h5>
                                       </div>
                                       <div id="your-act" class="collapse" role="tabpanel" aria-labelledby="headingOne" style="">
                                          <div class="card-body">
                                             <div class="row">
                                                <div class="col-sm-8">
                                                   <p>Who can see your future post?</p>
                                                </div>
                                                <div class="col-sm-4">
                                                   <div class="float-right">
                                                      <span>Public</span>
                                                      <a href="#" class="ml-2"><i class="fas fa-edit"></i></a>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="row">
                                                <div class="col-sm-8">
                                                   <p>Who can see the People, Pages or List you followed</p>
                                                </div>
                                                <div class="col-sm-4">
                                                   <div class="float-right">
                                                      <span>Public</span>
                                                      <a href="#" class="ml-2"><i class="fas fa-edit"></i></a>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="row">
                                                <div class="col-sm-8">
                                                   <p>Who can tag me</p>
                                                </div>
                                                <div class="col-sm-4">
                                                   <div class="float-right">
                                                      <span>Everyone</span>
                                                      <a href="#" class="ml-2"><i class="fas fa-edit"></i></a>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <!-- How People Find and Contact you -->
                                 <div id="how" role="tablist">
                                    <div class="card no-border bg-dynamic">
                                       <div role="tab" id="headingThree">
                                          <h5 class="mb-0">
                                             <a data-toggle="collapse" href="#how-find" aria-expanded="false" aria-controls="how-find" class="collapsed">
                                                <p>How people find and contact you</p>
                                             </a>
                                          </h5>
                                       </div>
                                       <div id="how-find" class="collapse" role="tabpanel" aria-labelledby="headingOne" style="">
                                          <div class="card-body">
                                             <div class="row">
                                                <div class="col-sm-8">
                                                   <p>Who can send you friend request</p>
                                                </div>
                                                <div class="col-sm-4">
                                                   <div class="float-right">
                                                      <span>Everyone</span>
                                                      <a href="#" class="ml-2"><i class="fas fa-edit"></i></a>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="row">
                                                <div class="col-sm-8">
                                                   <p>Who can see your friend request</p>
                                                </div>
                                                <div class="col-sm-4">
                                                   <div class="float-right">
                                                      <span>Everyone</span>
                                                      <a href="#" class="ml-2"><i class="fas fa-edit"></i></a>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="row">
                                                <div class="col-sm-8">
                                                   <p>Who can look you up using email address you provided</p>
                                                </div>
                                                <div class="col-sm-4">
                                                   <div class="float-right">
                                                      <span>Everyone</span>
                                                      <a href="#" class="ml-2"><i class="fas fa-edit"></i></a>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="row">
                                                <div class="col-sm-8">
                                                   <p>Who can look you up using phone number you provided</p>
                                                </div>
                                                <div class="col-sm-4">
                                                   <div class="float-right">
                                                      <span>Everyone</span>
                                                      <a href="#" class="ml-2"><i class="fas fa-edit"></i></a>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <!-- Profile and tagging -->
                        <div class="card no-border bg-dynamic">
                           <div role="tab" id="headingOne">
                              <h5 class="mb-0">
                                 <a data-toggle="collapse" href="#prof_tag" aria-expanded="false" aria-controls="prof_tag" class="collapsed">
                                    <p>Profile and Tagging</p>
                                 </a>
                              </h5>
                           </div>
                           <div id="prof_tag" class="collapse" role="tabpanel" aria-labelledby="headingOne" style="">
                              <div class="card-body">
                                 <!-- Viewing and sharing -->
                                 <div id="recommended" role="tablist">
                                    <div class="card no-border bg-dynamic">
                                       <div role="tab" id="headingTwo">
                                          <h5 class="mb-0">
                                             <a data-toggle="collapse" href="#view_share" aria-expanded="false" aria-controls="view_share" class="collapsed">
                                                <p>Viewing and sharing</p>
                                             </a>
                                          </h5>
                                       </div>
                                       <div id="view_share" class="collapse" role="tabpanel" aria-labelledby="headingOne" style="">
                                          <div class="card-body">
                                             <div class="row">
                                                <div class="col-sm-8">
                                                   <p>Who can post on your profile?</p>
                                                </div>
                                                <div class="col-sm-4">
                                                   <div class="float-right">
                                                      <span>Friends</span>
                                                      <a href="#" class="ml-2"><i class="fas fa-edit"></i></a>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="row">
                                                <div class="col-sm-8">
                                                   <p>Who can see what others post on your profile?</p>
                                                </div>
                                                <div class="col-sm-4">
                                                   <div class="float-right">
                                                      <span>Friends</span>
                                                      <a href="#" class="ml-2"><i class="fas fa-edit"></i></a>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="row">
                                                <div class="col-sm-8">
                                                   <p>Allow others to share your posts to ther stories?</p>
                                                </div>
                                                <div class="col-sm-4">
                                                   <div class="float-right">
                                                      <span>On</span>
                                                      <a href="#" class="ml-2"><i class="fas fa-edit"></i></a>
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="row">
                                                <div class="col-sm-8">
                                                   <p>Hide comments containing certain words from your profile?</p>
                                                </div>
                                                <div class="col-sm-4">
                                                   <div class="float-right">
                                                      <span>Off</span>
                                                      <a href="#" class="ml-2"><i class="fas fa-edit"></i></a>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <!-- Public Post -->
                        <div class="card no-border bg-dynamic">
                           <div role="tab" id="headingOne">
                              <h5 class="mb-0">
                                 <a data-toggle="collapse" href="#pub_post" aria-expanded="false" aria-controls="pub_post" class="collapsed">
                                    <p>Public Post</p>
                                 </a>
                              </h5>
                           </div>
                           <div id="pub_post" class="collapse" role="tabpanel" aria-labelledby="headingOne" style="">
                              <div class="card-body">
                                 <div class="row">
                                    <div class="col-sm-8">
                                       <p>Who can follow me?</p>
                                    </div>
                                    <div class="col-sm-4">
                                       <div class="float-right">
                                          <span>Public</span>
                                          <a href="#" class="ml-2"><i class="fas fa-edit"></i></a>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="row">
                                    <div class="col-sm-8">
                                       <p>Who can comment on your public post?</p>
                                    </div>
                                    <div class="col-sm-4">
                                       <div class="float-right">
                                          <span>Public</span>
                                          <a href="#" class="ml-2"><i class="fas fa-edit"></i></a>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="row">
                                    <div class="col-sm-8">
                                       <p>Get Notification from?</p>
                                    </div>
                                    <div class="col-sm-4">
                                       <div class="float-right">
                                          <span>Public</span>
                                          <a href="#" class="ml-2"><i class="fas fa-edit"></i></a>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="row">
                                    <div class="col-sm-8">
                                       <p>Who can like and comment on your profice pictures and other profile info?</p>
                                    </div>
                                    <div class="col-sm-4">
                                       <div class="float-right">
                                          <span>Public</span>
                                          <a href="#" class="ml-2"><i class="fas fa-edit"></i></a>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="row">
                                    <div class="col-sm-8">
                                       <p>Enable previews when your public Group posts are shared off of Ume. Previews may include your username, your profile image and any other content from your original post.</p>
                                    </div>
                                    <div class="col-sm-4">
                                       <div class="float-right">
                                          <span>On</span>
                                          <a href="#" class="ml-2"><i class="fas fa-edit"></i></a>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="row">
                                    <div class="col-sm-8">
                                       <p>Comment ranking</p>
                                    </div>
                                    <div class="col-sm-4">
                                       <div class="float-right">
                                          <span>Off</span>
                                          <a href="#" class="ml-2"><i class="fas fa-edit"></i></a>
                                       </div>
                                    </div>
                                 </div>

                              </div>
                           </div>
                        </div>

                     </div>
                  </div>
               </div>
               <div class="tab-pane fade" id="pub-settings" role="tabpanel" aria-labelledby="pub-settings-tab">
                  <div class="p-3" style="font-size: 15px;">
                     <a href="#">
                        <p>Face Recognition</p>
                     </a>
                     <a href="#">
                        <p>Language Region</p>
                     </a>
                     <a href="#">
                        <p>Highlights</p>
                     </a>
                     <a href="#">
                        <p>Notification Settings</p>
                     </a>
                     <a href="#">
                        <p>Super Inbox</p>
                     </a>
                     <a href="#">
                        <p>Videos</p>
                     </a>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>

<!-- Theme Modal -->
  <div class="modal left fade" id="ediThemeModal" tabindex="-1" role="dialog" aria-labelledby="ediThemeModal">
    <div class="modal-dialog" role="document">
      <div class="modal-content" style="overflow-y: hidden;">

        <div class="modal-header">
            <ul class="row nav nav-tabs" id="themeTab" role="tablist" style="border: none;">
               <li class="col-1"></li>
               <li class="col-5 nav-item ediTheme">
                  <a class="active ediTheme" id="selecTheme-tab" data-toggle="tab" href="#selecTheme" role="tab" aria-selected="true">Select<br>theme</a>
               </li>
               <li class="col-5 nav-item ediTheme">
                  <a class="ediTheme" id="creaTheme-tab" data-toggle="tab" href="#creaTheme" role="tab" aria-selected="false">Create your own</a>
               </li>
               <li class="col-1"></li>
            </ul>
        </div>
        <div class="modal-body" style="overflow-y: auto;">
          <div class="row tab-content" id="myTabContent">            
            <div class="col-12">
               <div class="fade show active radio-group" id="selecTheme" role="tabpanel" aria-labelledby="selecTheme-tab">
                  
                  <div class="row">
                     <div class="col-1"></div>
                     <div class="col-5">
                        <table class="table table-borderless opTheme radio" data-value="2">
                           <tr>
                              <td style="background: #5EB1BF"></td>
                              <td style="background: #CDEDF6"></td>
                              <td style="background: #EF7B45"></td>
                           </tr>
                        </table>
                     </div>
                     <div class="col-5">
                        <table class="table table-borderless opTheme radio" data-value="3">
                           <tr>
                              <td style="background: #246A73"></td>
                              <td style="background: #368F8B"></td>
                              <td style="background: #F3DFC1"></td>
                           </tr>
                        </table>
                     </div>
                     <div class="col-1"></div>
                  </div>
                  <div class="row">
                     <div class="col-1"></div>
                     <div class="col-5">
                        <table class="table table-borderless opTheme radio" data-value="4">
                           <tr>
                              <td style="background: #A23B72"></td>
                              <td style="background: #F18F01"></td>
                              <td style="background: #C73E1D"></td>
                           </tr>
                        </table>
                     </div>
                     <div class="col-5">
                        <table class="table table-borderless opTheme radio" data-value="5">
                           <tr>
                              <td style="background: #12130F"></td>
                              <td style="background: #5B9279"></td>
                              <td style="background: #8FCB9B"></td>
                           </tr>
                        </table>
                     </div>
                     <div class="col-1"></div>
                  </div>
                  <div class="row">
                     <div class="col-1"></div>
                     <div class="col-5">
                        <table class="table table-borderless opTheme radio" data-value="6">
                           <tr>
                              <td style="background: #E26D5A"></td>
                              <td style="background: #EFA8B8"></td>
                              <td style="background: #DFC8B9"></td>
                           </tr>
                        </table>
                     </div>
                     <div class="col-5">
                        <table class="table table-borderless opTheme radio" data-value="7">
                           <tr>
                              <td style="background: #FCBA04"></td>
                              <td style="background: #A50104"></td>
                              <td style="background: #590004"></td>
                           </tr>
                        </table>
                     </div>
                     <div class="col-1"></div>
                  </div>
                  <div class="row">
                     <div class="col-1"></div>
                     <div class="col-5">
                        <table class="table table-borderless opTheme radio" data-value="8">
                           <tr>
                              <td style="background: #D34E24"></td>
                              <td style="background: #EBDBC1"></td>
                              <td style="background: #38726C"></td>
                           </tr>
                        </table>
                     </div>
                     <div class="col-5">
                        <table class="table table-borderless opTheme radio" data-value="9">
                           <tr>
                              <td style="background: #DDE2C6"></td>
                              <td style="background: #BBC5AA"></td>
                              <td style="background: #A72608"></td>
                           </tr>
                        </table>
                     </div>
                     <div class="col-1"></div>
                  </div>
                  <div class="row">
                     <div class="col-1"></div>
                     <div class="col-5">
                        <table class="table table-borderless opTheme radio" data-value="10">
                           <tr>
                              <td style="background: #348AA7"></td>
                              <td style="background: #525174"></td>
                              <td style="background: #513B56"></td>
                           </tr>
                        </table>
                     </div>
                     <div class="col-5">
                        <table class="table table-borderless opTheme radio" data-value="11">
                           <tr>
                              <td style="background: #513B56"></td>
                              <td style="background: #17BEBB"></td>
                              <td style="background: #FFC914"></td>
                           </tr>
                        </table>
                     </div>
                     <div class="col-1"></div>
                  </div>
                  <div class="row">
                     <div class="col-1"></div>
                     <div class="col-5">
                        <table class="table table-borderless opTheme radio" data-value="12">
                           <tr>
                              <td style="background: #A5FFD6"></td>
                              <td style="background: #FFA69E"></td>
                              <td style="background: #FF686B"></td>
                           </tr>
                        </table>
                     </div>
                     <div class="col-5">
                        <table class="table table-borderless opTheme radio" data-value="13">
                           <tr>
                              <td style="background: #B56576"></td>
                              <td style="background: #E56B6F"></td>
                              <td style="background: #EAAC8B"></td>
                           </tr>
                        </table>
                     </div>
                     <div class="col-1"></div>
                  </div>
                  <div class="row">
                     <div class="col-1"></div>
                     <div class="col-5">
                        <table class="table table-borderless opTheme radio" data-value="14">
                           <tr>
                              <td style="background: #BCE784"></td>
                              <td style="background: #5DD39E"></td>
                              <td style="background: #348AA7"></td>
                           </tr>
                        </table>
                     </div>
                     <div class="col-5">
                        <table class="table table-borderless opTheme radio" data-value="15">
                           <tr>
                              <td style="background: #FAF0CA"></td>
                              <td style="background: #F4D35E"></td>
                              <td style="background: #EE964B"></td>
                           </tr>
                        </table>
                     </div>
                     <div class="col-1"></div>
                  </div>
                  <div class="row">
                     <div class="col-1"></div>
                     <div class="col-5">
                        <table class="table table-borderless opTheme radio" data-value="16">
                           <tr>
                              <td style="background: #FFFCF2"></td>
                              <td style="background: #CCC5B9"></td>
                              <td style="background: #403D39"></td>
                           </tr>
                        </table>
                     </div>
                     <div class="col-5">
                        <table class="table table-borderless opTheme radio" data-value="17">
                           <tr>
                              <td style="background: #E8DAB2"></td>
                              <td style="background: #4F6D7A"></td>
                              <td style="background: #C0D6DF"></td>
                           </tr>
                        </table>
                     </div>
                     <div class="col-1"></div>
                  </div>

               </div>
               <div class="fade" id="creaTheme" role="tabpanel" aria-labelledby="creaTheme-tab">
                  Create your own
               </div>                  
          </div>
        </div>

      </div><!-- modal-content -->
    </div><!-- modal-dialog -->
          
  </div><!-- modal -->

<script type="text/javascript">

   $(document).ready(function(){
       $("#e_name").click(function(){
         $('#bk_name').toggle('show');
         $('#inp_fname').toggle('show');
         $('#inp_mname').toggle('show');
         $('#inp_lname').toggle('show');
       });
       $("#e_number").click(function(){
         $('#bk_num').toggle('show');
         $('#inp_number').toggle('show');

       });
       $("#e_email").click(function(){
         $('#bk_email').toggle('show');
         $('#inp_email').toggle('show');

       });
       $("#e_sec_email").click(function(){
         $('#bk_sec_email').toggle('show');
         $('#inp_sec_email').toggle('show');

       });
   });
   $('form#edit_name').submit(function(e) {
      
         var fname = $('#inp_fname').val();
         var mname = $('#inp_mname').val(); 
         var lname = $('#inp_lname').val(); 
         $.ajax({
         type: "POST",
         url: "../server/server.php",
         data : {tag: "UPDATE_FULL_NAME",fname:fname,mname:mname,lname:lname},
         success: function(data){
         
         $('#bk_name').toggle('show');
           $('#inp_fname').css('display','none');
           $('#inp_mname').css('display','none');
           $('#inp_lname').css('display','none');
         }
       })
     });
   $('form#edit_number').submit(function(e) {
         var number = $('#inp_number').val(); 
         $.ajax({
         type: "POST",
         url: "../server/server.php",
         data : {tag: "UPDATE_NUMBER",number:number},
         success: function(data){
         $('#bk_num').toggle('show');
           $('#inp_number').css('display','none');
           alert(data);
         }
       })
     });
   $('form#edit_email').submit(function(e) {
         var email = $('#inp_email').val(); 
         $.ajax({
         type: "POST",
         url: "../server/server.php",
         data : {tag: "UPDATE_EMAIL",email:email},
         success: function(data){
         $('#bk_email').toggle('show');
           $('#inp_email').css('display','none');
           alert(data);
         }
       })
     });
   $('form#edit_sec_email').submit(function(e) {
         var sec_email = $('#inp_sec_email').val(); 
         $.ajax({
         type: "POST",
         url: "../server/server.php",
         data : {tag: "UPDATE_SEC_EMAIL",sec_email:sec_email},
         success: function(data){
         $('#bk_sec_email').toggle('show');
           $('#inp_sec_email').css('display','none');
           alert(data);
         }
       })
     });

</script>
<script type="text/javascript">

</script>
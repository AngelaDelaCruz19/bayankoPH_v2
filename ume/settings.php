<div class="modal border" id="settings" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog modal-lg modal-dialog-scrollable" role="document">
      <div class="modal-content text-dynamic">
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
                           <span>Arah Angela D. Dela Cruz</span><a href="#"><i class="fas fa-edit float-right"></i></a>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-lg-4 col-sm-12">
                           <p class="font-weight-bold">Username</p>
                        </div>
                        <div class="col-lg-8 col-sm-12">
                           <span>Angela</span><a href="#"><i class="fas fa-edit float-right"></i></a>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-lg-4 col-sm-12">
                           <p class="font-weight-bold">Contact</p>
                        </div>
                        <div class="col-lg-8 col-sm-12">
                           <span>09488695804</span><a href="#"><i class="fas fa-edit float-right"></i></a>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-lg-4 col-sm-12">
                           <p class="font-weight-bold">Ad Account Contact</p>
                        </div>
                        <div class="col-lg-8 col-sm-12">
                           <span>arahangeladel@gmail.com</span><a href="#"><i class="fas fa-edit float-right"></i></a>
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-lg-4 col-sm-12">
                           <p class="font-weight-bold">Backup Contact</p>
                        </div>
                        <div class="col-lg-8 col-sm-12">
                           <span>arahangela@depedmarikina.ph</span><a href="#"><i class="fas fa-edit float-right"></i></a>
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
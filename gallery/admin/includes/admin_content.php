        <div class="container-fluid">

                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Admin
                            <small>Subheading</small>
                        </h1>
                        
                        <?php
                        
                            $user = new User();
                        
                            $user->username = "sdgfh";
                            $user->password = "gdsfh";
                            $user->first_name = "dfghn";
                            $user->last_name = "tedgfxdbnting";
        
                            $user->create();
                        
//                        $user = User::find_user_by_id(1);
//                        
//                        $user->last_name = "test";
//                            
//                        $user->update();
//                        
//                        $user = User::find_user_by_id(1);
//                        
//                        $user->delete();
//                        $user->username = "Augustas";
//                        $user->save();
                        
//                        $user = new User();
//                        $user->username = "migloiiuaks";
//                        $user->save();
                        
                        
                        
                            
                        
                        ?>
                        
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.html">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-file"></i> Blank Page
                            </li>
                        </ol>
                    </div>
                </div>
        </div>
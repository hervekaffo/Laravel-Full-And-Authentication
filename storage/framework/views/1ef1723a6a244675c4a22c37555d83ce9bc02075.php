
      <nav class="navbar navbar-expand-md navbar-dark bg-dark">
          <div class="container">
              <a class="navbar-brand" href="<?php echo e(url('/')); ?>">
                  <?php echo e(config('app.name', 'Laravel')); ?>

              </a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="<?php echo e(__('Toggle navigation')); ?>">
                  <span class="navbar-toggler-icon"></span>
              </button>

              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <!-- Left Side Of Navbar -->
                  <ul class="navbar-nav mr-auto">

                  </ul>

                  <ul class="navbar-nav mr-auto">
                      <li class="nav-item active">
                        <a class="nav-link" href="/lsapp/public">Home <span class="sr-only">(current)</span></a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="/lsapp/public/about">About</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="/lsapp/public/services">Services</a>
                      </li>
                      <li class="nav-item">
                              <a class="nav-link" href="/lsapp/public/post">Blog</a>
                      </li>
                      <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                        <div class="dropdown-menu" aria-labelledby="dropdown01">
                          <a class="dropdown-item" href="#">Action</a>
                          <a class="dropdown-item" href="#">Another action</a>
                          <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                      </li>
                    </ul>

                  <!-- Right Side Of Navbar -->
                  <ul class="navbar-nav ml-auto">
                      <!-- Authentication Links -->
                      <?php if(auth()->guard()->guest()): ?>
                          <li class="nav-item">
                              <a class="nav-link" href="<?php echo e(route('login')); ?>"><?php echo e(__('Login')); ?></a>
                          </li>
                          <?php if(Route::has('register')): ?>
                              <li class="nav-item">
                                  <a class="nav-link" href="<?php echo e(route('register')); ?>"><?php echo e(__('Register')); ?></a>
                              </li>
                          <?php endif; ?>
                      <?php else: ?>
                          <li class="nav-item dropdown">
                              <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                  <?php echo e(Auth::user()->name); ?> <span class="caret"></span>
                              </a>

                              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                  <a class="dropdown-item" href="/lsapp/public/dashboard">Dashboard</a>
                                  <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                                     onclick="event.preventDefault();
                                                   document.getElementById('logout-form').submit();">
                                      <?php echo e(__('Logout')); ?>

                                  </a>

                                  <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                      <?php echo csrf_field(); ?>
                                  </form>
                              </div>
                          </li>
                      <?php endif; ?>
                  </ul>
              </div>
          </div>
      </nav>
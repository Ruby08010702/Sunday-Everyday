<section class="vh-100 gradient-custom">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                <i class="fas fa-crow fa-2x me-3 pt-5 mt-xl-4" style="color: #709085;"></i>
                <span class="h1 fw-bold mb-0">Logo</span>
                <div class="card bg-dark text-white" style="border-radius: 1rem;">
                    <div class="card-body p-5 text-center">

                        <div class="mb-md-5 mt-md-4 pb-5">
                            <?= $this->Flash->render() ?>
                            <h2 class="fw-bold mb-2 text-uppercase">Login</h2>
                            <?= $this->Form->create() ?>
                            <p class="text-white-50 mb-5">Please enter your username and password!</p>

                            <div class="form-outline form-white mb-4">
                                <?= $this->Form->control('username', ['required' => true]) ?>
                            </div>

                            <div class="form-outline form-white mb-4">
                                <?= $this->Form->control('password', ['required' => true]) ?>
                            </div>
                            <?= $this->Form->submit(__('Login'),['class' => 'btn btn-outline-light btn-lg px-5']); ?>
                            <?= $this->Html->link("Back to Home Page", ['controller'=>'products','action' => 'guests_home'], ['class' => 'btn btn-outline-info btn-lg px-5']) ?>
                            <?= $this->Form->end() ?>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

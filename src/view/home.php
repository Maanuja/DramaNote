<?php $titled = 'DramaNote | Homepage'; ?>
<?php $css = '' ?>
<?php ob_start(); ?>        
        <main>
            <!-- <div class="page-loader">
                <div class="loader">Loading...</div>
            </div> -->
            <div class="p-5 mb-4 rounded-3">
                <div class="container-fluid py-5">
                    <section class="jumbo text-centertron">
                        <h1 class="display-5 fw-bold">DramaNote </h1>
                        <h2 class="display-6 fw-bold">Brings Happiness to your days.</h2>
                        <p class="col-md-8 fs-4">
                        This list contains all of the Korean dramas people from the community have reviewed so far.
                        I have seen many more dramas, and I am always watching something new. I know it's the same for you!
                        It is a continuously growing list, so be sure to check back! And join me!
                        </p>
                        <button class="btn btn-primary btn-lg" type="button"><a href="index.php?route=drama">DramaList</a></button>
                    </section>
                </div>
            </div>
        </main>

<?php $content = ob_get_clean(); ?>
<?php require('main.php'); ?>
   
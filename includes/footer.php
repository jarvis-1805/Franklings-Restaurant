                <div id="footer" class="cf">
                    <div class="column three">
                        <strong>Phone</strong>
                        1234567890
                    </div><!-- column -->

                    <div class="column three">
                        <strong>Location</strong>
                        123 Kapiolani Bouvelard<br>
                        Honolulu, HI
                    </div><!-- column -->

                    <div class="column three last">
                        <strong>Hours</strong>
                        <em>Tuesday - Thursday</em><br>
                        1:00pm - 9:00pm<br><br>
                        
                        <em>Friday - Saturday</em><br>
                        4:00pm - 11:00pm<br><br>
                        
                        <em>Sunday - Monday</em><br>
                        Closed<br><br>

                        <?php include('includes/store-hours.php'); ?>
                        
                    </div><!-- column -->

                </div><!-- footer -->
                <small>&copy;<?php echo date('Y'); ?> <?php echo $companyName; ?></small>
            </div><!-- content -->
        </div><!-- wrapper -->
        <div class="copyright-info">
            <?php include('includes/copyright.php'); ?>
        </div><!-- copyright-info -->
    </body>
</html>
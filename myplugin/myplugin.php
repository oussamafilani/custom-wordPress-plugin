<?php
/*
 * @package My Plugin
 * @version 1.0.0
 */
/*
Plugin Name: Footer plugin
Plugin URI: https://github.com/filani07/
Description: first plugin made to test how this goes
Author: FILANI Oussama
Version: 1.0.0
Author URI: https://github.com/filani07/
*/
if (!defined('ABSPATH')) {
  die;
}

add_action('admin_menu', 'my_admin_menu');

function my_admin_menu()
{
  add_menu_page('Footer title', 'Footer Settings', 1, 'footer_setting_page', 'mt_settings_page', 'dashicons-button
', 75);
}
// mt_settings_page() displays the page content for the Test Settings submenu
function mt_settings_page()
{
  echo '<h2>' . __('Footer Settings Configurations') . '</h2>';
  include_once 'footer_settings_page.php';
}
function your_function()
{
  global $wpdb;

  $db = new mysqli("localhost", "root", "", "$wpdb->dbname");



  // Check connection
  if ($db->connect_errno) {
    echo "Failed to connect to MySQL: " . $db->connect_error;
    exit();
  }
  if (isset($_POST['subscribe'])) {
    $email = $_POST['email'];


    $sql  = "INSERT INTO `subscription` (`email`) VALUES ('$email');";
    $result = mysqli_query($db, $sql);
  }

  if (get_option('footerTemplate') == "Template1") {
    echo "<!-- Footer -->
    <footer style='background-color: " . get_option('footerColor') . ";' class='text-center text-lg-start text-muted'>
      <!-- Section: Social media -->
      <section
        class='d-flex justify-content-center justify-content-lg-between p-4 border-bottom'
      >
        <!-- Left -->
        <div class='me-5 d-none d-lg-block'>
          <span>Get connected with us on social networks:</span>
        </div>
        <!-- Left -->
    
        <!-- Right -->
        <div>
          <a href='" . get_option('facebook-icon') . "' class='me-4 text-reset'>
            <i class='fa fa-facebook-f'></i>
          </a>
          <a href='" . get_option('twitter-icon') . "' class='me-4 text-reset'>
            <i class='fa fa-twitter'></i>
          </a>
          <a href='" . get_option('google-icon') . "' class='me-4 text-reset'>
            <i class='fa fa-google'></i>
          </a>
          <a href='" . get_option('instagram-icon') . "' class='me-4 text-reset'>
            <i class='fa fa-instagram'></i>
          </a>
          <a href='" . get_option('github-icon') . "' class='me-4 text-reset'>
            <i class='fa fa-github'></i>
          </a>
        </div>
        <!-- Right -->
      </section>
      <!-- Section: Social media -->
    
      <!-- Section: Links  -->
      <section class=''>
        <div class='container text-center text-md-start mt-5'>
          <!-- Grid row -->
          <div class='row mt-3'>
            <!-- Grid column -->
            <div class='col-md-3 col-lg-4 col-xl-3 mx-auto mb-4'>
              <!-- Content -->
              <h6 class='text-uppercase fw-bold mb-4'>
                <i class='fas fa-gem me-3'></i>Company name
              </h6>
              <p>
                Here you can use rows and columns to organize your footer content. Lorem ipsum
                dolor sit amet, consectetur adipisicing elit.
              </p>
            </div>
            <!-- Grid column -->
    
            <!-- Grid column -->
            <div class='col-md-2 col-lg-2 col-xl-2 mx-auto mb-4'>
              <!-- Links -->
              <h6 class='text-uppercase fw-bold mb-4'>
                Products
              </h6>
              <p>
                <a href='#!' class='text-reset'>Angular</a>
              </p>
              <p>
                <a href='#!' class='text-reset'>React</a>
              </p>
              <p>
                <a href='#!' class='text-reset'>Vue</a>
              </p>
              <p>
                <a href='#!' class='text-reset'>Laravel</a>
              </p>
            </div>
            <!-- Grid column -->
    
            <!-- Grid column -->
            <div class='col-md-3 col-lg-2 col-xl-2 mx-auto mb-4'>
              <!-- Links -->
              <h6 class='text-uppercase fw-bold mb-4'>
                Useful links
              </h6>
              <p>
                <a href='#!' class='text-reset'>Pricing</a>
              </p>
              <p>
                <a href='#!' class='text-reset'>Settings</a>
              </p>
              <p>
                <a href='#!' class='text-reset'>Orders</a>
              </p>
              <p>
                <a href='#!' class='text-reset'>Help</a>
              </p>
            </div>
            <!-- Grid column -->
    
            <!-- Grid column -->
            <div class='col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4'>
              <!-- Links -->
              <h6 class='text-uppercase fw-bold mb-4'>
                Contact
              </h6>
              <p><i class='fas fa-home me-3'></i> New York, NY 10012, US</p>
              <p>
                <i class='fas fa-envelope me-3'></i>
                info@example.com
              </p>
              <p><i class='fas fa-phone me-3'></i> + 01 234 567 88</p>
              <p><i class='fas fa-print me-3'></i> + 01 234 567 89</p>
            </div>
            <!-- Grid column -->
          </div>
          <!-- Grid row -->
        </div>
      </section>
      <!-- Section: Links  -->
    
      <!-- Copyright -->
      <div class='text-center p-4' style='background-color: rgba(0, 0, 0, 0.05);'>
        © 2021 Copyright:
        <a class='text-reset fw-bold' href='#'>" . get_bloginfo('name') . "</a>
      </div>
      <!-- Copyright -->
    </footer>
    <!-- Footer -->";
  }

  if (get_option('footerTemplate') == "Template2") {
    echo '<!-- Footer -->
<footer style="background-color: ' . get_option('footerColor') . ';"class="text-center text-white">
  <!-- Grid container -->
  <div class="container p-4">
    <!-- Section: Social media -->
    <section class="mb-4">
      <!-- Facebook -->
      <a class="btn btn-outline-light btn-floating m-1" href="' . get_option('facebook-icon') . '" target="_blank" role="button"
        ><i class="fab fa-facebook-f"></i
      ></a>

      <!-- Twitter -->
      <a class="btn btn-outline-light btn-floating m-1" href="' . get_option('twitter-icon') . '" target="_blank" role="button"
        ><i class="fab fa-twitter"></i
      ></a>

      <!-- Google -->
      <a class="btn btn-outline-light btn-floating m-1" href="' . get_option('google-icon') . '" target="_blank" role="button"
        ><i class="fab fa-google"></i
      ></a>

      <!-- Instagram -->
      <a class="btn btn-outline-light btn-floating m-1" href="' . get_option('instagram-icon') . '" target="_blank" role="button"
        ><i class="fab fa-instagram"></i
      ></a>

      <!-- Linkedin -->
      <a class="btn btn-outline-light btn-floating m-1" href="' . get_option('linkedin-icon') . '" target="_blank" role="button"
        ><i class="fab fa-linkedin-in"></i
      ></a>

      <!-- Github -->
      <a class="btn btn-outline-light btn-floating m-1" href="' . get_option('github-icon') . '" " target="_blank" role="button"
        ><i class="fab fa-github"></i
      ></a>
    </section>
    <!-- Section: Social media -->

    <!-- Section: Form -->
    <section class="">
      <form action="" method="post">
        <!--Grid row-->
        <div class="row d-flex justify-content-center">
          <!--Grid column-->
          <div class="col-auto">
            <p class="pt-2">
              <strong>Sign up for our newsletter</strong>
            </p>
          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-md-5 col-12">
            <!-- Email input -->
            <div class="form-outline form-white mb-4">
              <input type="email" id="form5Example2" name="email" class="form-control" />
              <label class="form-label" for="form5Example2">Email address</label>
            </div>
          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-auto">
            <!-- Submit button -->
           
            <button type="submit"  name="subscribe" class="btn btn-outline-light mb-4">
              Subscribe
            </button>
          </div>
          <!--Grid column-->
        </div>
        <!--Grid row-->
      </form>
    </section>
    <!-- Section: Form -->

    <!-- Section: Text -->
    <section class="mb-4">
      <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt distinctio earum
        repellat quaerat voluptatibus placeat nam, commodi optio pariatur est quia magnam
        eum harum corrupti dicta, aliquam sequi voluptate quas.
      </p>
    </section>
    <!-- Section: Text -->

    <!-- Section: Links -->
    <section class="">
      <!--Grid row-->
      <div class="row">
        <!--Grid column-->
        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
          <h5 class="text-uppercase">Links</h5>

          <ul class="list-unstyled mb-0">
            <li>
              <a href="#!" class="text-white">Link 1</a>
            </li>
            <li>
              <a href="#!" class="text-white">Link 2</a>
            </li>
            <li>
              <a href="#!" class="text-white">Link 3</a>
            </li>
            <li>
              <a href="#!" class="text-white">Link 4</a>
            </li>
          </ul>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
          <h5 class="text-uppercase">Links</h5>

          <ul class="list-unstyled mb-0">
            <li>
              <a href="#!" class="text-white">Link 1</a>
            </li>
            <li>
              <a href="#!" class="text-white">Link 2</a>
            </li>
            <li>
              <a href="#!" class="text-white">Link 3</a>
            </li>
            <li>
              <a href="#!" class="text-white">Link 4</a>
            </li>
          </ul>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
          <h5 class="text-uppercase">Links</h5>

          <ul class="list-unstyled mb-0">
            <li>
              <a href="#!" class="text-white">Link 1</a>
            </li>
            <li>
              <a href="#!" class="text-white">Link 2</a>
            </li>
            <li>
              <a href="#!" class="text-white">Link 3</a>
            </li>
            <li>
              <a href="#!" class="text-white">Link 4</a>
            </li>
          </ul>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
          <h5 class="text-uppercase">Links</h5>

          <ul class="list-unstyled mb-0">
            <li>
              <a href="#!" class="text-white">Link 1</a>
            </li>
            <li>
              <a href="#!" class="text-white">Link 2</a>
            </li>
            <li>
              <a href="#!" class="text-white">Link 3</a>
            </li>
            <li>
              <a href="#!" class="text-white">Link 4</a>
            </li>
          </ul>
        </div>
        <!--Grid column-->
      </div>
      <!--Grid row-->
    </section>
    <!-- Section: Links -->
  </div>
  <!-- Grid container -->

  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2020 Copyright:
    <a class="text-white" href="#">' . get_bloginfo("name") . '</a>
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->';
  }
}
add_action('wp_footer', 'your_function');

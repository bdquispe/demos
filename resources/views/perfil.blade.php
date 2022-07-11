<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/3.6.95/css/materialdesignicons.css">
<style>
  body {
    background-color: #f9f9fa
  }

  .padding {
      padding: 3rem !important
  }

  .user-card-full {
      overflow: hidden
  }

  .card {
      border-radius: 5px;
      -webkit-box-shadow: 0 1px 20px 0 rgba(69, 90, 100, 0.08);
      box-shadow: 0 1px 20px 0 rgba(69, 90, 100, 0.08);
      border: none;
      margin-bottom: 30px
  }

  .m-r-0 {
      margin-right: 0px
  }

  .m-l-0 {
      margin-left: 0px
  }

  .user-card-full .user-profile {
      border-radius: 5px 0 0 5px
  }

  .bg-c-lite-green {
			background: linear-gradient(120deg, #a1c4fd 0%, #c2e9fb 100%);
  }

  .user-profile {
      padding: 20px 0
  }

  .card-block {
      padding: 1.25rem
  }

  .m-b-25 {
      margin-bottom: 25px
  }

  .img-radius {
      border-radius: 5px
  }

  h6 {
      font-size: 14px
  }

  .card .card-block p {
      line-height: 25px
  }

  @media only screen and (min-width: 1400px) {
      p {
          font-size: 14px
      }
  }

  .card-block {
      padding: 1.25rem
  }

  .b-b-default {
      border-bottom: 1px solid #e0e0e0
  }

  .m-b-20 {
      margin-bottom: 20px
  }

  .p-b-5 {
      padding-bottom: 5px !important
  }

  .card .card-block p {
      line-height: 25px
  }

  .m-b-10 {
      margin-bottom: 10px
  }

  .text-muted {
      color: #919aa3 !important
  }

  .b-b-default {
      border-bottom: 1px solid #e0e0e0
  }

  .f-w-600 {
      font-weight: 600
  }

  .m-b-20 {
      margin-bottom: 20px
  }

  .m-t-40 {
      margin-top: 20px
  }

  .p-b-5 {
      padding-bottom: 5px !important
  }

  .m-b-10 {
      margin-bottom: 10px
  }

  .m-t-40 {
      margin-top: 20px
  }

  .user-card-full .social-link li {
      display: inline-block
  }

  .user-card-full .social-link li a {
      font-size: 20px;
      margin: 0 10px 0 0;
      -webkit-transition: all 0.3s ease-in-out;
      transition: all 0.3s ease-in-out
  }
</style>

<div class="page-content container" id="page-content">
{{ $user['data']['cities'][0]['name'] }}
<?php
    echo "<pre>";
    var_dump($user);
    echo "</pre>";
    // json_encode($user);
?>
</div>
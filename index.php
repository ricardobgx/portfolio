<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <link rel="stylesheet" href="styles.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link
    href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap"
    rel="stylesheet" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />

  <script src="script.js"></script>

  <title>Ricardo Brasileiro</title>
</head>

<body>
  <div class="profile-picture-container">
    <img src="assets/images/profile.jpg" alt="" class="profile-picture" />
    <img src="" alt="" class="current-enterprise-logo" />
  </div>
  <div class="personal-info">
    <h1 class="name">Ricardo Brasileiro</h1>
    <p class="function">Full stack developer</p>
  </div>
  <div class="social-media-links">
    <button class="social-media-link linkedin" onclick="openSocialMediaLink('https://www.linkedin.com/in/ricardobgx')">
      <svg width="24" height="24" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path
          d="M6.94043 5.50002C6.94016 6.03046 6.7292 6.53906 6.35394 6.91394C5.97868 7.28883 5.46986 7.49929 4.93943 7.49902C4.409 7.49876 3.90039 7.28779 3.52551 6.91253C3.15062 6.53727 2.94016 6.02846 2.94043 5.49802C2.9407 4.96759 3.15166 4.45899 3.52692 4.0841C3.90218 3.70922 4.411 3.49876 4.94143 3.49902C5.47186 3.49929 5.98047 3.71026 6.35535 4.08552C6.73024 4.46078 6.94069 4.96959 6.94043 5.50002ZM7.00043 8.98002H3.00043V21.5H7.00043V8.98002ZM13.3204 8.98002H9.34043V21.5H13.2804V14.93C13.2804 11.27 18.0504 10.93 18.0504 14.93V21.5H22.0004V13.57C22.0004 7.40002 14.9404 7.63002 13.2804 10.66L13.3204 8.98002Z"
          fill="white" />
      </svg>
      <p>LinkedIn</p>
    </button>
    <button class="social-media-link github" onclick="openSocialMediaLink('https://github.com/ricardobgx')">
      <svg width="24" height="24" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path
          d="M16.302 23.5999C17.0962 23.5999 16.0849 23.5999 16.0849 23.5999H9.28902C9.28902 23.5999 8.36021 23.5999 9.15439 23.5999C9.15439 22.9915 9.15439 23.3318 9.15439 22.9915L9.09766 20.1551C5.07003 21.0627 4.21913 18.5667 4.21913 18.5667C3.5384 16.8649 2.63076 16.4678 2.63076 16.4678C1.26931 15.5602 2.68749 15.5602 2.68749 15.5602C4.1624 15.6737 4.95658 17.0351 4.95658 17.0351C6.20458 19.2475 8.30348 18.6235 9.15439 18.2831C9.26784 17.3187 9.66493 16.6947 10.062 16.2977C6.82857 15.9573 3.48167 14.7093 3.48167 9.15003C3.48167 7.56167 4.04894 6.25695 4.95658 5.23586C4.7864 4.89549 4.33258 3.42059 5.12676 1.43514C5.12676 1.43514 6.31803 1.03804 9.09766 2.91004C11.4802 2.22932 13.9762 2.22932 16.3587 2.91004C19.1384 1.03804 20.3296 1.43514 20.3296 1.43514C21.1238 3.42059 20.67 4.89549 20.4998 5.23586C21.4075 6.25695 21.9747 7.56167 21.9747 9.15003C21.9747 14.7093 18.5711 15.9573 15.3377 16.2977C15.9049 16.7515 16.3587 17.6591 16.3587 19.0206L16.302 22.9915C16.302 23.3097 16.302 22.9915 16.302 23.5999Z"
          fill="white" />
      </svg>
      <p>GitHub</p>
    </button>
    <a href="mailto:contato@ricardobrasileiro.com" class="social-media-link mail">
      <svg width="24" height="24" viewBox="0 0 24 21" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path
          d="M4 0.5C1.79086 0.5 0 2.29086 0 4.5V4.9026L12.0002 11.3642L24 4.90282V4.5C24 2.29086 22.2092 0.5 20 0.5H4Z"
          fill="white" />
        <path
          d="M24 7.17427L12.4743 13.3804C12.1783 13.5398 11.8221 13.5398 11.5261 13.3804L0 7.17407V16.5C0 18.7092 1.79086 20.5 4 20.5H20C22.2092 20.5 24 18.7092 24 16.5V7.17427Z"
          fill="white" />
      </svg>
      <p>Email</p>
    </a>
  </div>
</body>

</html>
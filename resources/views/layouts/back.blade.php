<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Puntos') | Avena cubana</title>
    <meta name="description"
          content="@yield('description', '.')"/>
    <meta name="copyright" content="Ártico Digital S.A.S">
    <meta name="author" content="Ártico Digital"/>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,600,600i,700,700i,900,900i|Roboto:300,300i,400,400i,500,500i,700,700i,900,900i|family=Montserrat:900"
          rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="{{asset('css/main.min.css')}}"/>
    @yield('styles')
</head>
<body id="#body" class="@yield('classBody')">
<header class="Header row middle center @yield('headerClass', '')">
    <nav>
        <ul class="row middle">
            <li><a href="/admin">
                    <svg width="24px" height="23px" viewBox="0 0 24 23" version="1.1" xmlns="http://www.w3.org/2000/svg"
                         xmlns:xlink="http://www.w3.org/1999/xlink">
                        <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <g id="Artboard" transform="translate(-649.000000, -80.000000)" fill-rule="nonzero">
                                <g id="Group" transform="translate(649.000000, 80.000000)">
                                    <path d="M3.56522817,6.9 L3.56522817,6.9 C1.6827877,6.9 0.142609127,5.3475 0.142609127,3.45 L0.142609127,3.45 C0.142609127,1.5525 1.6827877,0 3.56522817,0 L3.56522817,0 C5.44766865,0 6.98784722,1.5525 6.98784722,3.45 L6.98784722,3.45 C6.98784722,5.3475 5.44766865,6.9 3.56522817,6.9 Z"
                                          id="Shape" fill="#E35900"></path>
                                    <path d="M3.56522817,14.95 L3.56522817,14.95 C1.6827877,14.95 0.142609127,13.3975 0.142609127,11.5 L0.142609127,11.5 C0.142609127,9.6025 1.6827877,8.05 3.56522817,8.05 L3.56522817,8.05 C5.44766865,8.05 6.98784722,9.6025 6.98784722,11.5 L6.98784722,11.5 C6.98784722,13.3975 5.44766865,14.95 3.56522817,14.95 Z"
                                          id="Shape" fill="#186CB3"></path>
                                    <path d="M3.56522817,23 L3.56522817,23 C1.6827877,23 0.142609127,21.4475 0.142609127,19.55 L0.142609127,19.55 C0.142609127,17.6525 1.6827877,16.1 3.56522817,16.1 L3.56522817,16.1 C5.44766865,16.1 6.98784722,17.6525 6.98784722,19.55 L6.98784722,19.55 C6.98784722,21.4475 5.44766865,23 3.56522817,23 Z"
                                          id="Shape" fill="#F8E81C"></path>
                                    <path d="M11.9791667,6.9 L11.9791667,6.9 C10.0967262,6.9 8.55654762,5.3475 8.55654762,3.45 L8.55654762,3.45 C8.55654762,1.5525 10.0967262,0 11.9791667,0 L11.9791667,0 C13.8616071,0 15.4017857,1.5525 15.4017857,3.45 L15.4017857,3.45 C15.4017857,5.3475 13.8616071,6.9 11.9791667,6.9 Z"
                                          id="Shape" fill="#FED400"></path>
                                    <path d="M11.9791667,14.95 L11.9791667,14.95 C10.0967262,14.95 8.55654762,13.3975 8.55654762,11.5 L8.55654762,11.5 C8.55654762,9.6025 10.0967262,8.05 11.9791667,8.05 L11.9791667,8.05 C13.8616071,8.05 15.4017857,9.6025 15.4017857,11.5 L15.4017857,11.5 C15.4017857,13.3975 13.8616071,14.95 11.9791667,14.95 Z"
                                          id="Shape" fill="#BD0FE1"></path>
                                    <path d="M11.9791667,23 L11.9791667,23 C10.0967262,23 8.55654762,21.4475 8.55654762,19.55 L8.55654762,19.55 C8.55654762,17.6525 10.0967262,16.1 11.9791667,16.1 L11.9791667,16.1 C13.8616071,16.1 15.4017857,17.6525 15.4017857,19.55 L15.4017857,19.55 C15.4017857,21.4475 13.8616071,23 11.9791667,23 Z"
                                          id="Shape" fill="#7ED321"></path>
                                    <path d="M20.3931052,6.9 L20.3931052,6.9 C18.5106647,6.9 16.9704861,5.3475 16.9704861,3.45 L16.9704861,3.45 C16.9704861,1.5525 18.5106647,0 20.3931052,0 L20.3931052,0 C22.2755456,0 23.8157242,1.5525 23.8157242,3.45 L23.8157242,3.45 C23.8157242,5.3475 22.2755456,6.9 20.3931052,6.9 Z"
                                          id="Shape" fill="#7FBEE8"></path>
                                    <path d="M20.3931052,14.95 L20.3931052,14.95 C18.5106647,14.95 16.9704861,13.3975 16.9704861,11.5 L16.9704861,11.5 C16.9704861,9.6025 18.5106647,8.05 20.3931052,8.05 L20.3931052,8.05 C22.2755456,8.05 23.8157242,9.6025 23.8157242,11.5 L23.8157242,11.5 C23.8157242,13.3975 22.2755456,14.95 20.3931052,14.95 Z"
                                          id="Shape" fill="#B8E986"></path>
                                    <path d="M20.3931052,23 L20.3931052,23 C18.5106647,23 16.9704861,21.4475 16.9704861,19.55 L16.9704861,19.55 C16.9704861,17.6525 18.5106647,16.1 20.3931052,16.1 L20.3931052,16.1 C22.2755456,16.1 23.8157242,17.6525 23.8157242,19.55 L23.8157242,19.55 C23.8157242,21.4475 22.2755456,23 20.3931052,23 Z"
                                          id="Shape" fill="#D0011B"></path>
                                </g>
                            </g>
                        </g>
                    </svg>
                    INICIO</a></li>
            <li><a href="/admin/reportes">
                    <svg width="26px" height="23px" viewBox="0 0 26 23" version="1.1" xmlns="http://www.w3.org/2000/svg"
                         xmlns:xlink="http://www.w3.org/1999/xlink">
                        <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <g id="Artboard" transform="translate(-592.000000, -69.000000)">
                                <g id="noun_1220196_cc" transform="translate(592.000000, 69.000000)">
                                    <g id="report" transform="translate(0.000000, 0.193024)">
                                        <path d="M20.1991279,0.110938684 C20.0545916,0.138543552 19.9508956,0.266290871 19.9534884,0.413552105 L19.9534884,2.8344625 C19.9527004,2.84705881 19.9527004,2.85969211 19.9534884,2.87228842 L19.9534884,19.4782158 C19.9542646,19.5278848 19.9672433,19.576599 19.9912791,19.6200592 L21.502907,22.3435921 C21.5561654,22.4399017 21.6574676,22.4996713 21.7674419,22.4996713 C21.8774162,22.4996713 21.9787183,22.4399017 22.0319767,22.3435921 L23.5436047,19.6200592 C23.5676405,19.576599 23.5806192,19.5278848 23.5813953,19.4782158 L23.5813953,3.13707592 L25.3953488,3.13707592 L25.3953488,9.49196079 C25.3938069,9.60109411 25.4510902,9.70260446 25.5452639,9.75762153 C25.6394376,9.8126386 25.7559113,9.8126386 25.850085,9.75762153 C25.9442586,9.70260446 26.0015419,9.60109411 26,9.49196079 L26,2.8344625 C25.9999832,2.66734062 25.8646373,2.53186579 25.6976744,2.53184908 L23.5813953,2.53184908 L23.5813953,0.413552105 C23.5813786,0.246430225 23.4460326,0.110955394 23.2790698,0.110938684 L20.255814,0.110938684 C20.2369603,0.109161823 20.2179816,0.109161823 20.1991279,0.110938684 L20.1991279,0.110938684 Z M1.81395349,0.716165526 C0.814253065,0.716165526 0,1.53119474 0,2.53184908 L0,20.6886513 C0,21.6893026 0.814253065,22.50435 1.81395349,22.50435 L16.3255814,22.50435 C17.3252817,22.50435 18.1395349,21.6893026 18.1395349,20.6886513 L18.1395349,2.53184908 C18.1395349,1.53119474 17.3252817,0.716165526 16.3255814,0.716165526 L1.81395349,0.716165526 Z M20.5581395,0.716165526 L22.9767442,0.716165526 L22.9767442,2.53184908 L20.5581395,2.53184908 L20.5581395,0.716165526 Z M1.81395349,1.32139539 L16.3255814,1.32139539 C17.0007639,1.32139539 17.5348837,1.85602132 17.5348837,2.53184908 L17.5348837,20.6886513 C17.5348837,21.3644882 17.0007639,21.8991171 16.3255814,21.8991171 L1.81395349,21.8991171 C1.13877098,21.8991171 0.604651163,21.3644882 0.604651163,20.6886513 L0.604651163,2.53184908 C0.604651163,1.85602132 1.13877098,1.32139539 1.81395349,1.32139539 L1.81395349,1.32139539 Z M4.53488372,2.8344625 C3.87015986,2.8344625 3.3255814,3.37955947 3.3255814,4.04491618 L3.3255814,5.86059671 C3.3255814,6.52595342 3.87015986,7.07105039 4.53488372,7.07105039 L13.6046512,7.07105039 C14.269375,7.07105039 14.8139535,6.52595342 14.8139535,5.86059671 L14.8139535,4.04491618 C14.8139535,3.37955947 14.269375,2.8344625 13.6046512,2.8344625 L4.53488372,2.8344625 Z M20.5581395,3.13707592 L22.8728198,3.13707592 L22.9011628,3.13707592 C22.9262583,3.14022663 22.9516487,3.14022663 22.9767442,3.13707592 L22.9767442,18.5703816 L20.5581395,18.5703816 L20.5581395,3.13707592 Z M4.53488372,3.43968934 L13.6046512,3.43968934 C13.9448569,3.43968934 14.2093023,3.70438605 14.2093023,4.04491618 L14.2093023,5.86059671 C14.2093023,6.20112987 13.9448569,6.46582355 13.6046512,6.46582355 L4.53488372,6.46582355 C4.19467795,6.46582355 3.93023256,6.20112987 3.93023256,5.86059671 L3.93023256,4.04491618 C3.93023256,3.70438605 4.19467795,3.43968934 4.53488372,3.43968934 Z M3.60901163,8.88673395 C3.4494701,8.89674912 3.32528402,9.0293404 3.3255814,9.18934737 L3.3255814,20.0834487 C3.32560485,20.2505658 3.46094887,20.3860333 3.62790698,20.38605 L14.5116279,20.38605 C14.678586,20.3860333 14.81393,20.2505658 14.8139535,20.0834487 L14.8139535,9.18934737 C14.8165463,9.04208613 14.7128503,8.91433881 14.568314,8.88673395 C14.5494603,8.88495709 14.5304816,8.88495709 14.5116279,8.88673395 L3.62790698,8.88673395 C3.62161007,8.8865369 3.61530854,8.8865369 3.60901163,8.88673395 L3.60901163,8.88673395 Z M3.93023256,9.49196079 L6.95348837,9.49196079 L6.95348837,12.5180829 L3.93023256,12.5180829 L3.93023256,9.49196079 Z M7.55813953,9.49196079 L10.5813953,9.49196079 L10.5813953,12.5180829 L7.55813953,12.5180829 L7.55813953,9.49196079 Z M11.1860465,9.49196079 L14.2093023,9.49196079 L14.2093023,12.5180829 L11.1860465,12.5180829 L11.1860465,9.49196079 Z M3.93023256,13.1233158 L6.95348837,13.1233158 L6.95348837,16.14945 L3.93023256,16.14945 L3.93023256,13.1233158 Z M7.55813953,13.1233158 L10.5813953,13.1233158 L10.5813953,16.14945 L7.55813953,16.14945 L7.55813953,13.1233158 Z M11.1860465,13.1233158 L14.2093023,13.1233158 L14.2093023,16.14945 L11.1860465,16.14945 L11.1860465,13.1233158 Z M3.93023256,16.7546829 L6.95348837,16.7546829 L6.95348837,19.7808171 L3.93023256,19.7808171 L3.93023256,16.7546829 L3.93023256,16.7546829 Z M7.55813953,16.7546829 L10.5813953,16.7546829 L10.5813953,19.7808171 L7.55813953,19.7808171 L7.55813953,16.7546829 L7.55813953,16.7546829 Z M11.1860465,16.7546829 L14.2093023,16.7546829 L14.2093023,19.7808171 L11.1860465,19.7808171 L11.1860465,16.7546829 L11.1860465,16.7546829 Z"
                                              id="Shape" fill="#545454" fill-rule="nonzero"></path>
                                        <polygon id="Path" fill="#F6A623"
                                                 points="20.5581395 19.1755842 22.9767442 19.1755842 22.9767442 19.3930855 21.7674419 21.5776013 20.5581395 19.3930855"></polygon>
                                    </g>
                                </g>
                            </g>
                        </g>
                    </svg>
                    REPORTES</a></li>

            @can('admin_users')
                <li><a href="/admin/usuarios">
                        <svg width="22px" height="23px" viewBox="0 0 22 23" version="1.1"
                             xmlns="http://www.w3.org/2000/svg"
                             xmlns:xlink="http://www.w3.org/1999/xlink">
                            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <g id="Artboard" transform="translate(-552.000000, -69.000000)" fill-rule="nonzero">
                                    <g id="contacts" transform="translate(552.000000, 69.000000)">
                                        <path d="M6.89051282,15.1743902 L6.89051282,16.7254878 C6.89051282,17.0353061 7.14307014,17.2864634 7.45461538,17.2864634 L16.3984615,17.2864634 C16.7100068,17.2864634 16.9625641,17.0353061 16.9625641,16.7254878 L16.9625641,15.1743902 C16.9563456,12.9883578 15.1725854,11.2195034 12.974359,11.2195122 L12.8333333,11.2195122 C14.1534472,10.7777243 14.9573314,9.44990454 14.7322478,8.08297082 C14.5071642,6.7160371 13.3193985,5.71254295 11.9265385,5.71254295 C10.5336784,5.71254295 9.34591271,6.7160371 9.12082911,8.08297082 C8.8957455,9.44990454 9.69962973,10.7777243 11.0197436,11.2195122 L10.8730769,11.2195122 C8.67705245,11.2225924 6.89672288,12.9905454 6.89051282,15.1743902 L6.89051282,15.1743902 Z M10.2102564,8.53804878 C10.2102564,7.84829268 10.6280715,7.22645441 11.2688752,6.96249617 C11.9096789,6.69853794 12.6472758,6.8444418 13.1377257,7.33217302 C13.6281756,7.81990424 13.7748927,8.55341249 13.5094632,9.19066404 C13.2440336,9.82791558 12.6187291,10.2434146 11.9251282,10.2434146 C10.9786746,10.2418704 10.2118092,9.47925595 10.2102564,8.53804878 Z M15.834359,15.1743902 L15.834359,16.1645122 L8.01871795,16.1645122 L8.01871795,15.1743902 C8.02337734,13.6095419 9.29949972,12.3430013 10.8730769,12.3414634 L12.974359,12.3414634 C14.5501378,12.3399096 15.8296931,13.6073524 15.834359,15.1743902 Z"
                                              id="Shape" fill="#7FBEE8"></path>
                                        <rect id="Rectangle-path" fill="#186CB3" x="2.05333333" y="8.97560976"
                                              width="1.12820513" height="5.04878049"></rect>
                                        <path d="M21.7969231,3.36585366 C21.7969231,1.50694401 20.2815792,0 18.4123077,0 L3.74564103,0 C2.8110053,0 2.05333333,0.753472006 2.05333333,1.68292683 L2.05333333,4.76829268 L3.18153846,4.76829268 L3.18153846,1.68292683 C3.18153846,1.37310855 3.43409578,1.12195122 3.74564103,1.12195122 L18.4123077,1.12195122 C19.6584887,1.12195122 20.6687179,2.12658056 20.6687179,3.36585366 L20.6687179,19.6341463 C20.6687179,20.8734194 19.6584887,21.8780488 18.4123077,21.8780488 L3.74564103,21.8780488 C3.43409578,21.8780488 3.18153846,21.6268914 3.18153846,21.3170732 L3.18153846,18.2317073 L2.05333333,18.2317073 L2.05333333,21.3170732 C2.05333333,22.246528 2.8110053,23 3.74564103,23 L18.4123077,23 C20.2815792,23 21.7969231,21.493056 21.7969231,19.6341463 L21.7969231,3.36585366 Z"
                                              id="Shape" fill="#186CB3"></path>
                                        <path d="M0.203076923,16.0691463 C0.203076923,16.3789646 0.455634244,16.630122 0.767179487,16.630122 L4.57487179,16.630122 C4.88641704,16.630122 5.13897436,16.3789646 5.13897436,16.0691463 C5.13897436,15.7593281 4.88641704,15.5081707 4.57487179,15.5081707 L0.767179487,15.5081707 C0.455634244,15.5081707 0.203076923,15.7593281 0.203076923,16.0691463 Z"
                                              id="Shape" fill="#186CB3"></path>
                                        <path d="M0.203076923,6.93085366 C0.203076923,7.24067193 0.455634244,7.49182927 0.767179487,7.49182927 L4.29282051,7.49182927 C4.60436576,7.49182927 4.85692308,7.24067193 4.85692308,6.93085366 C4.85692308,6.62103538 4.60436576,6.36987805 4.29282051,6.36987805 L0.767179487,6.36987805 C0.455634244,6.36987805 0.203076923,6.62103538 0.203076923,6.93085366 Z"
                                              id="Shape" fill="#186CB3"></path>
                                    </g>
                                </g>
                            </g>
                        </svg>
                        Usuarios</a></li>
            @endcan
            <li><a href="/admin/productos">
                    <svg width="19px" height="23px" viewBox="0 0 19 23" version="1.1" xmlns="http://www.w3.org/2000/svg"
                         xmlns:xlink="http://www.w3.org/1999/xlink">
                        <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <g id="Artboard" transform="translate(-636.000000, -69.000000)">
                                <g id="noun_1134896_cc" transform="translate(636.000000, 69.000000)">
                                    <g id="products" transform="translate(0.000000, 0.198241)">
                                        <path d="M9.5,0.112569459 C7.11723248,0.112569459 5.15689355,1.87295651 4.809375,4.15311 L2.53333333,4.15311 C2.51355255,4.15219901 2.49373912,4.15219901 2.47395833,4.15311 C2.16908078,4.18009085 1.92748919,4.41721489 1.9,4.71645459 L0.316666667,21.8110492 C0.295454022,22.0331332 0.396565382,22.2494548 0.581913075,22.3785278 C0.767260768,22.5076008 1.00868607,22.5298159 1.21524641,22.4368048 C1.42180675,22.3437938 1.56212069,22.1496873 1.58333333,21.9276032 L3.1171875,5.39635324 L4.75,5.39635324 L4.75,8.19365054 C4.74676982,8.41782962 4.86677102,8.62634977 5.0640528,8.73936453 C5.26133459,8.85237929 5.50533208,8.85237929 5.70261386,8.73936453 C5.89989565,8.62634977 6.01989685,8.41782962 6.01666667,8.19365054 L6.01666667,5.39635324 L12.9833333,5.39635324 L12.9833333,8.19365054 C12.9801031,8.41782962 13.1001044,8.62634977 13.2973861,8.73936453 C13.4946679,8.85237929 13.7386654,8.85237929 13.9359472,8.73936453 C14.133229,8.62634977 14.2532302,8.41782962 14.25,8.19365054 L14.25,5.39635324 L15.8828125,5.39635324 L17.3572917,21.2477046 L3.48333333,21.2477046 C3.25493059,21.2445341 3.0424818,21.3623163 2.92733778,21.5559499 C2.81219375,21.7495835 2.81219375,21.9890689 2.92733778,22.1827026 C3.0424818,22.3763362 3.25493059,22.4941183 3.48333333,22.4909478 L18.05,22.4909478 C18.2287763,22.4917015 18.3995515,22.4182662 18.5201853,22.2887629 C18.6408191,22.1592595 18.7000759,21.9857499 18.6833333,21.8110492 L17.1,4.71645459 C17.0692385,4.39609842 16.7945019,4.15172253 16.4666667,4.15311 L14.190625,4.15311 C13.8431068,1.87295651 11.8827704,0.112569459 9.5,0.112569459 Z M9.5,1.3558127 C11.1872731,1.3558127 12.5872267,2.54191804 12.9140625,4.15311 L6.0859375,4.15311 C6.41277392,2.54191804 7.8127297,1.3558127 9.5,1.3558127 Z"
                                              id="Shape" fill="#417505" fill-rule="nonzero"></path>
                                        <path d="M9.43072917,10.3596134 C9.1044383,10.3948065 8.8596068,10.6688374 8.86666667,10.9909478 L8.86666667,13.7882451 L6.01666667,13.7882451 C5.99688588,13.7873341 5.97707245,13.7873341 5.95729167,13.7882451 C5.73099117,13.7986123 5.52752142,13.9267046 5.42354538,14.1242596 C5.31956934,14.3218146 5.33088784,14.5588108 5.45323631,14.745953 C5.57558478,14.9330953 5.79037041,15.0419444 6.01666667,15.0314884 L8.86666667,15.0314884 L8.86666667,17.8287857 C8.86343648,18.0529648 8.98343769,18.2614849 9.18071947,18.3744997 C9.37800126,18.4875144 9.62199874,18.4875144 9.81928053,18.3744997 C10.0165623,18.2614849 10.1365635,18.0529648 10.1333333,17.8287857 L10.1333333,15.0314884 L12.9833333,15.0314884 C13.2117361,15.0346588 13.4241849,14.9168767 13.5393289,14.7232431 C13.6544729,14.5296095 13.6544729,14.290124 13.5393289,14.0964904 C13.4241849,13.9028568 13.2117361,13.7850747 12.9833333,13.7882451 L10.1333333,13.7882451 L10.1333333,10.9909478 C10.1372624,10.8119232 10.0623522,10.6399295 9.92778725,10.5190144 C9.79322228,10.3980992 9.61207209,10.3400063 9.43072917,10.3596134 Z"
                                              id="Path" fill="#B8E986"></path>
                                    </g>
                                </g>
                            </g>
                        </g>
                    </svg>
                    Productos</a></li>
            <li>
                <a href="/logout">

                    <svg width="22px" height="23px" viewBox="0 0 22 23" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <g id="Group" fill-rule="nonzero">
                                <path d="M12.0195122,16.3190476 C12.2341463,16.5107143 12.4756098,16.5928571 12.7170732,16.5928571 C13.0121951,16.5928571 13.3073171,16.4559524 13.5219512,16.2095238 L16.902439,12.2119048 C17.2512195,11.8011905 17.2512195,11.1988095 16.902439,10.7880952 L13.5219512,6.79047619 C13.1463415,6.325 12.4487805,6.2702381 12.0195122,6.68095238 C11.5634146,7.06428571 11.5097561,7.77619048 11.9121951,8.21428571 L13.7634146,10.4047619 L6.97560976,10.4047619 C6.38536585,10.4047619 5.90243902,10.897619 5.90243902,11.5 C5.90243902,12.102381 6.38536585,12.5952381 6.97560976,12.5952381 L13.7634146,12.5952381 L11.9121951,14.7857143 C11.5097561,15.2511905 11.5634146,15.9357143 12.0195122,16.3190476 Z" id="Shape" fill="#C64050"></path>
                                <path d="M19.8268293,7.96785714 C20.0414634,8.51547619 20.6853659,8.78928571 21.2219512,8.5702381 C21.7585366,8.35119048 22.0268293,7.69404762 21.8121951,7.14642857 C20.0682927,2.79285714 15.9634146,0 11.3756098,0 C5.15121951,0 0.107317073,5.14761905 0.107317073,11.5 C0.107317073,17.852381 5.15121951,23 11.3756098,23 C15.9634146,23 20.0682927,20.2071429 21.8121951,15.8535714 C22.0268293,15.3059524 21.7853659,14.6488095 21.2219512,14.4297619 C20.6853659,14.2107143 20.0414634,14.4571429 19.8268293,15.0321429 C18.404878,18.5369048 15.104878,20.8095238 11.3756098,20.8095238 C6.35853659,20.8095238 2.25365854,16.6202381 2.25365854,11.5 C2.25365854,6.3797619 6.35853659,2.19047619 11.3756098,2.19047619 C15.104878,2.19047619 18.404878,4.46309524 19.8268293,7.96785714 Z" id="Shape" fill="#881D2A"></path>
                            </g>
                        </g>
                    </svg>
                    </svg>
                    Cerrar Sesión
                </a>
            </li>
        </ul>
    </nav>
</header>

<main class="Main content">
    @yield('content')
</main>
<footer class="Footer scrollTarget" id="#redes-sociales">
</footer>
@yield('scripts')
</body>
</html>

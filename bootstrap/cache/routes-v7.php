<?php

/*
|--------------------------------------------------------------------------
| Load The Cached Routes
|--------------------------------------------------------------------------
|
| Here we will decode and unserialize the RouteCollection instance that
| holds all of the route information for an application. This allows
| us to instantaneously load the entire route map into the router.
|
*/

app('router')->setCompiledRoutes(
    array (
  'compiled' => 
  array (
    0 => false,
    1 => 
    array (
      '/sanctum/csrf-cookie' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::01q6goFGq21MjUzm',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/oauth/authorize' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'passport.authorizations.authorize',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'passport.authorizations.approve',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'passport.authorizations.deny',
          ),
          1 => NULL,
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/oauth/token' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'passport.token',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/oauth/tokens' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'passport.tokens.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/oauth/token/refresh' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'passport.token.refresh',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/oauth/clients' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'passport.clients.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'passport.clients.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/oauth/scopes' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'passport.scopes.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/oauth/personal-access-tokens' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'passport.personal.tokens.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'passport.personal.tokens.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::GGECDM2qq0UAowN3',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/auth/login' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ptZuiTJMCRgFtA2V',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/auth/register' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::w0JEBMJgKG1Uzq3L',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/auth/organization/register' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::2E8deJsrAYuUTRdR',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/auth/password/email' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::sGJwbT7dXMndpqb7',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/auth/password/reset' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::eE2zhtmFAWa8kHuB',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/auth/forgot_password' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::gJmOAdmAMorxKfvI',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/auth/admin/login_admin' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::wCuWbdjHpnb57KgB',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/user' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::l8KKXutu3aeo7E2o',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/organization/subscriptions' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::rPTKupp3k3Afl5jc',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/events/notifications' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::SfxF9xAhj4B14y6o',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/logout' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::YgN0EXwJUTGPEAYb',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/payments' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::cfTeOQ4Uk4AsFHUd',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/payments/save' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::BZcOfnIa0Fz8ORXX',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/payments/create_ticket_after_payment' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::fqctJdMgFpL9tFE9',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/tickets' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::wYFYaQS7xK5TbDHn',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::QYZR5w9sSLVZUucA',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/tickets/categories' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::5uzGODim5lnEkQCH',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/tickets/buy' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::j8M5WIr8IP0BeIkH',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/tickets/buy/free' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::dCBp8rOgBuIWYNTz',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/ids' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::CSC5anoJTKWqySnJ',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/ids/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::iQ4P9eGJoRkxH86J',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/ids/created_ids' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::AboxRrM0PY30ohTW',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/ids/created_ids/search' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::xgGdv0hznqikAwdh',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/ids/created_ids/business' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ROSFjn14Fj3bjfyT',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/ids/created_ids/health' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::kcLuwlC39WSRVz6x',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/ids/created_ids/students' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::TsgFIAGIsAXmC3ce',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/ids/user' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::dNKO17krUuD5Dkg3',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/ids/user/business' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::8o8RBlfX7dxwI9Tu',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/ids/user/health' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::IclyUWJyAQIXaPvh',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/ids/user/students' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Tu3CGjcPmE7k1rCj',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/ids/organization' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::xIMX2YRQKgJ1kG2V',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/users' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Kcn6Rjyfu1odJcjO',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/users/roles' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::w9LAOcHWUSGAT2Wp',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/users/notifications' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::zFy7oLKiD0Fz4sG9',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/users/user/idcardnumber' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::lWvDacfVWFcGf9WD',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/users/individual/get' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::nVgLuFHZGqTVm6ZY',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/users/organization/get' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::wqrdg1OSY7ImMAf2',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/users/organization/role/get' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::5xsZ4mSOj7nb9Cb1',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/users/user/get' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::1iCRU4rsHaMkEN0R',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/users/user/verify' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::DVCOpr04XBoH7Yq3',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/individuals' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::XkJCcp2AEQrPmfCp',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::oejR2R5BUiFR7tNI',
          ),
          1 => NULL,
          2 => 
          array (
            'PATCH' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/individuals/getUser' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::uWSAbsDD6T69gsz2',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/individuals/mobileStats' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::D3FzAQxy9ahOwTT1',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/individuals/all' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Ye6E1Smu3o9hSNpq',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/individuals/organizations/join-requests' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ThbqTNCO5T5098i4',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/individuals/organizations/join-request' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::y0evV4bwRa47Qg5H',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/individuals/organizations' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::8NzCy0G8UA96aoZc',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/individuals/organizations/subscriptions/plans/search' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::CPq4uVw04wZSLQRD',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/individuals/organizations/subscriptions/active/all' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::emVl6MtOkRKl5viO',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/individuals/organizations/subscriptions/expired/all' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::5QfCZRzt0wMgABCK',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/individuals/organizations/subscription/pay' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::vOeRLteVCa5xiByt',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/organizations' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::qy9bR5gwYkoOEFOV',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::MUY0WZJR9um1D8SX',
          ),
          1 => NULL,
          2 => 
          array (
            'PATCH' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/organizations/change_password' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::psuMpb8ppMH4T6xb',
          ),
          1 => NULL,
          2 => 
          array (
            'PATCH' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/organizations/getUser' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::edFWqZplZGhXvVuB',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/organizations/mobileStats' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::uZFocyuHBgparv0b',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/organizations/members' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::d3UFupAUfHhEdFHw',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::OM33kUc1yinTnlD1',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/organizations/members/search' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::qhE10uNGKV68INrT',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/organizations/members/active' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::5gQrUoHA8XfKhjJx',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/organizations/members/unactive' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::4fX9MGD6T9bz8gBs',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/organizations/members/requests/get' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::u05jLVJZIxutx0j4',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/organizations/add-and-approve' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::6ctk91Jtgobm3yJP',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/organizations/subscriptions' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::2Nrl8aYinAuHwdGW',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::nvvhuvko59AtLT99',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/organizations/subscriptions/expired' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::apW9KcAwzug79p76',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/organizations/subscriptions/active' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::9fEjquPQXPmBAmDm',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/organizations/subscriptions/plans/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::EROOKuxl75TJ3pf9',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/organizations/subscriptions/plans' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::YyBIVCiv6d9QWIlv',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/organizations/subscriptions/plans/byOrg' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::zEsWdvtyuJTdswnh',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/organizations/subscribe' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::2oN73yIMrI5WBYPd',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/organizations/categories' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::nXMKRRRnV6vUin0v',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::9PdmC4XNkIAbxJ3N',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/id-card/templates' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::eNWWOtQSiOqWk32C',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/id-card/templates/add' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::wk00tJtOH7BF8nUN',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/id-card-management' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::MGNkCk1iYujL31XP',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/id-card-management/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::rZVkGOPYISDcPUXX',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/id-card-management/pending/id-card/individual' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::G2VQOFeev6hv5h0Q',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/id-card-management/pending/id-card/organization' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::vqAWE0r308oI81z5',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/id-card-management/organization/approved/id-card' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::hQMXj79R9BAQDZr5',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/id-card-management/organization/pending/id-card' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::cr9fkAT3BG6BA4F0',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/id-card-management/organization/declined/id-card' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::2yoGL577C1Yfp2f7',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/id-card-management/organization/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::f785rSGQLzjuAhp8',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/verificaton' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::EWk23fmlVbVctt8E',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/verificaton/send-request' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Z37GsvCdYHEo44Kq',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/verificaton/view-request' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::9Dx5Fox1QiynBzAP',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/verificaton/organization/add' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::53RLXODhbFjnbS8n',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/verificaton/organization/verifiers' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ajpnync0icBB36Q6',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/verificaton/organization/pending' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Ij54ugM4v6eXteSs',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/verificaton/organization/decline' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ASGGHqdv7iIg7sJh',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/profile/picture' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::fDDzXjEnnDVajPJV',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/profile/password/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::lhSZv9KWP7VXqxjN',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/profile/individual/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::g3Gf5vYSMUtBui3P',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/profile/organization/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::zH3SUaEU5kYcj64R',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/events' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::O3D3xHrJk9mIgj9J',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::zEIosM9C5MMOMIC7',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/events/searchbyname/get' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::MmS5ktXtUJWo0ScR',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/events/upcoming' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::SSdD3L8XOGV8S93N',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/events/open/upcoming' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::JCzxgYm2Hu4GdKdO',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/events/past' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::mdcdLalPpoGwkPpD',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/events/SearchOpenUpcoming' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::8gl6L6BPO5xHBg9d',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/events/SearchPastEvents' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::rvIHYSjSI7vdXQgU',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/events/invite' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::mGgm3fifvf6NH1wb',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/events/invite_multiple' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ycbAD1kvgnNOg3tC',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/events/invites' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::flkgDViz3u2udNVC',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/events/SearchInvites' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::IPn9lMSsSilDgh3v',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/events/invites/upcoming' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::mImR9SwX1ZRoGvtS',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/events/invites/past' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::IwTMfnS8UlTJeJYi',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/events/invites/accepted' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::vex6kUa9alk9EgAd',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/events/invites/declined' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::rT2gTGiODywlz0rT',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/events/invites/checked_in' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::2bgtrCx0PQi1u3pt',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/events/tickets/purchased' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::4rXjZFrlMWFtQLth',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/events/all' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::pandA1pu6qo2wwmG',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/events/category/list' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::3oQOfRQauUp44CLK',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/admin' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::1sz3k5uLnESc9JIu',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/admin/storeadmin' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::oSYzXzAblKn5RgTK',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/admin/all' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::bDsqiMMWMnXinlJg',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/admin/allLatestusers' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::9G15jWKNT92cZa4J',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/admin/all/members' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::3owlHlmDTyQmQYH3',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/admin/all/templates' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::AbMiD9z8vmhp9dE8',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/admin/all/idcards' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::jTEkeLHbIvZevO14',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/admin/events' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::CZ17wGDEKg6N3gwB',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/admin/events/category/store' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Ds33NiNxVeGiCsn6',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/admin/events/category/all' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::SvLjRla7JqzaBO2L',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/admin/payments/tickets' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::yJqqAxKDP4zmmuWE',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/admin/payments/subscriptions' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::SbkSW0f1gekBfZWs',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/admin/all/verifiers' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ghlpeZJEOSSYeAMm',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/test/url' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::K3CBUjLHzkPgNZsM',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/test/notify' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::EBkhsYBbyuFZUdOj',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/test/role' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::bLRFRMpvXY0oSW68',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/test/resource' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::XLP4KOifGE0ec8Cp',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/test/util' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ogoxYkIBQexwivpZ',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/test/user' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::PMPbMZeKbxT3Ocis',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/login' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'login',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::UMlpmYDjtmOSvhx7',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/logout' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'logout',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/register' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'register',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::3n6TgurJ8f6VDiDN',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/password/reset' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'password.request',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'password.update',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/password/email' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'password.email',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/password/confirm' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'password.confirm',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::FunO6Tg1Ja9HeDna',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/register/account-type' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::DmHEAn9e7VUthFtp',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/register/organization' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::svfLM10CJCjhshrs',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::0FoesFlmN88ZkGt9',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/email/verify' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'email.verify',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::aoOtXy4Opk58LQzO',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/faq' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::9ZqDeMEfGzeQTHUZ',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/about' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::780VuuOIqqf2OnNb',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/pricing' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::qFeQFdC0bfMumVed',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/contact' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::KXzfLFjmxXinv8tU',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/account-created' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::hIkmK9KzwT36arls',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/password-reset-success' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::cYAb6cvb9ZBTgXIO',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/payments/verify' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::QmPiPdX98ysxdDvJ',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/payments/verify/subscription' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::MyQ2qTTc7kIxQHwT',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/home' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'home',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/organization' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::YJ6wQh7rXIXSAOUH',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/individual' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Gpq0Kme6LF16S6tg',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/ticket-plans' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::9mKQXhnpJGveuUL3',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/create-ticket' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::CYFdaAaHFYzBm0bc',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin/login' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::rnrWyO6F890IjAhQ',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::uPRw4zijj3sC4jDb',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/admin' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::2qD7l2aSgv1MNUcu',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/test/url' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::156hsW3knj0ca040',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/test/email' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::WvK2tbrpIgVuiMTX',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/test/notify' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::aR453n0HseWyvBGh',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/test/unique' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::eJpMdRPf34FAwjem',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/test/user' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::NWXB6f4U71rWIv35',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
    ),
    2 => 
    array (
      0 => '{^(?|/o(?|auth/(?|tokens/([^/]++)(*:35)|clients/([^/]++)(?|(*:61))|personal\\-access\\-tokens/([^/]++)(*:102))|rganization/([^/]++)(?|(*:134)|/([^/]++)(?|(*:154)|/([^/]++)(*:171))))|/a(?|pi/(?|a(?|uth/resend/emailverification/([^/]++)(*:234)|dmin/(?|users(?|(?:/([^/]++))?(*:272)|/([^/]++)(?|(?:/([^/]++))?(*:306)|(*:314)))|organizations(?|(?:/([^/]++))?(*:354)|/([^/]++)(?:/((?:[0-1])))?(*:388))|events/category/(?|update/([^/]++)(*:431)|destroy/([^/]++)(*:455))))|payments/verify/(?|([^/]++)(*:493)|subscription(*:513)|ticket(*:527))|tickets/([^/]++)(*:552)|i(?|d(?|s/(?|show/([^/]++)(*:586)|update/([^/]++)(*:609)|delete/([^/]++)(*:632))|\\-card(?|/templates/(?|update/([^/]++)(*:679)|delete/([^/]++)(*:702))|\\-management/(?|process/id\\-card/organization/([^/]++)(*:765)|organization/process/id\\-card/([^/]++)(*:811))))|ndividuals/organizations/([^/]++)(?|(*:858)|/(?|subscriptions(*:883)|plans(*:896))))|users/(?|([^/]++)(*:924)|username/([^/]++)(*:949))|organizations/(?|members/(?|([^/]++)(?|(*:997))|requests/(?|approve/([^/]++)(*:1034)|decline/([^/]++)(*:1059)|([^/]++)(*:1076))|a(?|ctivate/([^/]++)(*:1106)|dd_(?|and_approve(*:1132)|no_subscription(*:1156)))|deactivate/([^/]++)(*:1186))|subscriptions/(?|plans/(?|update/([^/]++)(*:1237)|delete/([^/]++)(*:1261))|([^/]++)/update(*:1286)))|verificaton/organization/(?|approve/([^/]++)(*:1341)|decline/([^/]++)(*:1366))|events/(?|([^/]++)(*:1394)|mine(*:1407)|([^/]++)(*:1424)|getFullDetails/([^/]++)(*:1456)|([^/]++)(*:1473)|close/([^/]++)(*:1496)|([^/]++)/requests(*:1522)|requests/([^/]++)/([^/]++)(*:1557)|([^/]++)/share(*:1580)|export(*:1595)))|dmin/([^/]++)(?|(*:1622)|/([^/]++)(?|(*:1643)|/([^/]++)(*:1661))))|/password/reset/([^/]++)(*:1697)|/individual/([^/]++)(?|(*:1729)|/([^/]++)(?|(*:1750)|/([^/]++)(*:1768))))/?$}sDu',
    ),
    3 => 
    array (
      35 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'passport.tokens.destroy',
          ),
          1 => 
          array (
            0 => 'token_id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      61 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'passport.clients.update',
          ),
          1 => 
          array (
            0 => 'client_id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'passport.clients.destroy',
          ),
          1 => 
          array (
            0 => 'client_id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      102 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'passport.personal.tokens.destroy',
          ),
          1 => 
          array (
            0 => 'token_id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      134 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::cGxAEmGBAE5t982z',
          ),
          1 => 
          array (
            0 => 'path',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      154 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::fDRg48EVdpkYYOsJ',
          ),
          1 => 
          array (
            0 => 'path',
            1 => 'path2',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      171 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::zi3q6OPuJWVjtFno',
          ),
          1 => 
          array (
            0 => 'path',
            1 => 'path2',
            2 => 'path3',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      234 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::kAiBqNOHNSkHVUWD',
          ),
          1 => 
          array (
            0 => 'email',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      272 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::kKATmaA5qlcyoM65',
            'status' => NULL,
          ),
          1 => 
          array (
            0 => 'status',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      306 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::CQB8fVSzgnQCLVZQ',
            'status' => NULL,
          ),
          1 => 
          array (
            0 => 'id',
            1 => 'status',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      314 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::qRxKwmB0HTDM7dAq',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      354 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::3Jt33D8ZEpoE07I8',
            'status' => NULL,
          ),
          1 => 
          array (
            0 => 'status',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      388 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::zhq0CSAjrQ3wbuHi',
            'status' => NULL,
          ),
          1 => 
          array (
            0 => 'id',
            1 => 'status',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      431 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::7GfM2f6x1zVTlPaP',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      455 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ZcLmdZrpJPJsQMcu',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      493 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::2s6OsKrYBeXwMSXw',
          ),
          1 => 
          array (
            0 => 'ref',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      513 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::A3fLan9irpHjEhVh',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      527 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::HRR9CDUJmHEwyfte',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      552 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::3SANqvOTBR4ZfBeR',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      586 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::DyLGBvU5Xx3kLeSV',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      609 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::3UZBtbamldbxfKgs',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      632 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::PwQrPjbndyFuFIbU',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      679 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::VQXHslKWmzm1jrKb',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      702 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::eysZtIAvh60C08Vm',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      765 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::egR3FskXMdSlEfPR',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      811 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::YmV1ApxUb2h88tOS',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      858 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::f6JNWcvRf1ECnGkh',
          ),
          1 => 
          array (
            0 => 'query',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      883 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::kGvRzHT2rR5zJcUO',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      896 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::i13hP3khzDLGFAiD',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      924 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::9em9fGCxmP0lMP88',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      949 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::74X0m32MHUKsx26Y',
          ),
          1 => 
          array (
            0 => 'username',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      997 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::N5j2aN0sjSiNsJUc',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Esz3oIIVKnwdk1vO',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PATCH' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1034 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::GBcut0hrDsO6wLXj',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1059 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::sBmigLmwwuaojbZb',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1076 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ZCB3O1j5xj08ksPh',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1106 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::86HVe6zzcQz1sGaq',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1132 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::vSgbSDzdScSzMOtz',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1156 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Zmob7RmHYHUGKijU',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1186 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::tDunv49nmispFZq7',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1237 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::fGcFiNNXM4lrjDoB',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1261 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::UlSz6wm5a1EVqADd',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1286 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::amTCjMECvfcjwJ52',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1341 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::FaDto8Ma8BaVMCYw',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1366 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::FTFa6jafbP6FdQvL',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1394 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::uOnbMxDH6tSTZiTV',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1407 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::wsLvXBqlvw1OvEh5',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1424 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::zl4mSDCYoGAXtNQv',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1456 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::HsjuGHXvWWLiTT1j',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1473 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::vjY6zjreaw8jUUqH',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1496 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::rxQnk27wI2UpadoI',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1522 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::yJpRrpk6M6HnVYXK',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1557 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::wQczTI6SnagioZUr',
          ),
          1 => 
          array (
            0 => 'id',
            1 => 'status',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1580 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ONyTnzCTGbZ1WM2v',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1595 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::WmeRdKjchAAuDbhk',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      1622 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::dyUhD6v0rZekIrPy',
          ),
          1 => 
          array (
            0 => 'path',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1643 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::VIYpliiAvPPb3Aqc',
          ),
          1 => 
          array (
            0 => 'path',
            1 => 'path2',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1661 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::oy1ATOE0dgJxmIsP',
          ),
          1 => 
          array (
            0 => 'path',
            1 => 'path2',
            2 => 'path3',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1697 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'password.reset',
          ),
          1 => 
          array (
            0 => 'token',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1729 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::pRmOrojgD3BWOefr',
          ),
          1 => 
          array (
            0 => 'path',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1750 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::BCKCNddCQGDcpGXL',
          ),
          1 => 
          array (
            0 => 'path',
            1 => 'path2',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1768 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::DwdjoGFKZKcZj44p',
          ),
          1 => 
          array (
            0 => 'path',
            1 => 'path2',
            2 => 'path3',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => NULL,
          1 => NULL,
          2 => NULL,
          3 => NULL,
          4 => false,
          5 => false,
          6 => 0,
        ),
      ),
    ),
    4 => NULL,
  ),
  'attributes' => 
  array (
    'generated::01q6goFGq21MjUzm' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'sanctum/csrf-cookie',
      'action' => 
      array (
        'uses' => 'Laravel\\Sanctum\\Http\\Controllers\\CsrfCookieController@show',
        'controller' => 'Laravel\\Sanctum\\Http\\Controllers\\CsrfCookieController@show',
        'namespace' => NULL,
        'prefix' => 'sanctum',
        'where' => 
        array (
        ),
        'middleware' => 
        array (
          0 => 'web',
        ),
        'as' => 'generated::01q6goFGq21MjUzm',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'passport.authorizations.authorize' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'oauth/authorize',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => '\\Laravel\\Passport\\Http\\Controllers\\AuthorizationController@authorize',
        'as' => 'passport.authorizations.authorize',
        'controller' => '\\Laravel\\Passport\\Http\\Controllers\\AuthorizationController@authorize',
        'namespace' => '\\Laravel\\Passport\\Http\\Controllers',
        'prefix' => 'oauth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'passport.authorizations.approve' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'oauth/authorize',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => '\\Laravel\\Passport\\Http\\Controllers\\ApproveAuthorizationController@approve',
        'as' => 'passport.authorizations.approve',
        'controller' => '\\Laravel\\Passport\\Http\\Controllers\\ApproveAuthorizationController@approve',
        'namespace' => '\\Laravel\\Passport\\Http\\Controllers',
        'prefix' => 'oauth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'passport.authorizations.deny' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'oauth/authorize',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => '\\Laravel\\Passport\\Http\\Controllers\\DenyAuthorizationController@deny',
        'as' => 'passport.authorizations.deny',
        'controller' => '\\Laravel\\Passport\\Http\\Controllers\\DenyAuthorizationController@deny',
        'namespace' => '\\Laravel\\Passport\\Http\\Controllers',
        'prefix' => 'oauth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'passport.token' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'oauth/token',
      'action' => 
      array (
        'uses' => '\\Laravel\\Passport\\Http\\Controllers\\AccessTokenController@issueToken',
        'as' => 'passport.token',
        'middleware' => 'throttle',
        'controller' => '\\Laravel\\Passport\\Http\\Controllers\\AccessTokenController@issueToken',
        'namespace' => '\\Laravel\\Passport\\Http\\Controllers',
        'prefix' => 'oauth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'passport.tokens.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'oauth/tokens',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => '\\Laravel\\Passport\\Http\\Controllers\\AuthorizedAccessTokenController@forUser',
        'as' => 'passport.tokens.index',
        'controller' => '\\Laravel\\Passport\\Http\\Controllers\\AuthorizedAccessTokenController@forUser',
        'namespace' => '\\Laravel\\Passport\\Http\\Controllers',
        'prefix' => 'oauth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'passport.tokens.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'oauth/tokens/{token_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => '\\Laravel\\Passport\\Http\\Controllers\\AuthorizedAccessTokenController@destroy',
        'as' => 'passport.tokens.destroy',
        'controller' => '\\Laravel\\Passport\\Http\\Controllers\\AuthorizedAccessTokenController@destroy',
        'namespace' => '\\Laravel\\Passport\\Http\\Controllers',
        'prefix' => 'oauth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'passport.token.refresh' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'oauth/token/refresh',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => '\\Laravel\\Passport\\Http\\Controllers\\TransientTokenController@refresh',
        'as' => 'passport.token.refresh',
        'controller' => '\\Laravel\\Passport\\Http\\Controllers\\TransientTokenController@refresh',
        'namespace' => '\\Laravel\\Passport\\Http\\Controllers',
        'prefix' => 'oauth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'passport.clients.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'oauth/clients',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => '\\Laravel\\Passport\\Http\\Controllers\\ClientController@forUser',
        'as' => 'passport.clients.index',
        'controller' => '\\Laravel\\Passport\\Http\\Controllers\\ClientController@forUser',
        'namespace' => '\\Laravel\\Passport\\Http\\Controllers',
        'prefix' => 'oauth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'passport.clients.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'oauth/clients',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => '\\Laravel\\Passport\\Http\\Controllers\\ClientController@store',
        'as' => 'passport.clients.store',
        'controller' => '\\Laravel\\Passport\\Http\\Controllers\\ClientController@store',
        'namespace' => '\\Laravel\\Passport\\Http\\Controllers',
        'prefix' => 'oauth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'passport.clients.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'oauth/clients/{client_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => '\\Laravel\\Passport\\Http\\Controllers\\ClientController@update',
        'as' => 'passport.clients.update',
        'controller' => '\\Laravel\\Passport\\Http\\Controllers\\ClientController@update',
        'namespace' => '\\Laravel\\Passport\\Http\\Controllers',
        'prefix' => 'oauth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'passport.clients.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'oauth/clients/{client_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => '\\Laravel\\Passport\\Http\\Controllers\\ClientController@destroy',
        'as' => 'passport.clients.destroy',
        'controller' => '\\Laravel\\Passport\\Http\\Controllers\\ClientController@destroy',
        'namespace' => '\\Laravel\\Passport\\Http\\Controllers',
        'prefix' => 'oauth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'passport.scopes.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'oauth/scopes',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => '\\Laravel\\Passport\\Http\\Controllers\\ScopeController@all',
        'as' => 'passport.scopes.index',
        'controller' => '\\Laravel\\Passport\\Http\\Controllers\\ScopeController@all',
        'namespace' => '\\Laravel\\Passport\\Http\\Controllers',
        'prefix' => 'oauth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'passport.personal.tokens.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'oauth/personal-access-tokens',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => '\\Laravel\\Passport\\Http\\Controllers\\PersonalAccessTokenController@forUser',
        'as' => 'passport.personal.tokens.index',
        'controller' => '\\Laravel\\Passport\\Http\\Controllers\\PersonalAccessTokenController@forUser',
        'namespace' => '\\Laravel\\Passport\\Http\\Controllers',
        'prefix' => 'oauth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'passport.personal.tokens.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'oauth/personal-access-tokens',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => '\\Laravel\\Passport\\Http\\Controllers\\PersonalAccessTokenController@store',
        'as' => 'passport.personal.tokens.store',
        'controller' => '\\Laravel\\Passport\\Http\\Controllers\\PersonalAccessTokenController@store',
        'namespace' => '\\Laravel\\Passport\\Http\\Controllers',
        'prefix' => 'oauth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'passport.personal.tokens.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'oauth/personal-access-tokens/{token_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => '\\Laravel\\Passport\\Http\\Controllers\\PersonalAccessTokenController@destroy',
        'as' => 'passport.personal.tokens.destroy',
        'controller' => '\\Laravel\\Passport\\Http\\Controllers\\PersonalAccessTokenController@destroy',
        'namespace' => '\\Laravel\\Passport\\Http\\Controllers',
        'prefix' => 'oauth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::GGECDM2qq0UAowN3' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'O:47:"Laravel\\SerializableClosure\\SerializableClosure":1:{s:12:"serializable";O:46:"Laravel\\SerializableClosure\\Serializers\\Signed":2:{s:12:"serializable";s:351:"O:46:"Laravel\\SerializableClosure\\Serializers\\Native":5:{s:3:"use";a:0:{}s:8:"function";s:132:"function () {
    return \\response([
        \'status\' => true,
        \'message\' => \'You are now on WALL-ID API endpoints\'
    ]);
}";s:5:"scope";s:37:"Illuminate\\Routing\\RouteFileRegistrar";s:4:"this";N;s:4:"self";s:32:"00000000604abcd3000000000eb3764e";}";s:4:"hash";s:44:"IyO1DAPwHQBedhmr/n2ITrYUx/fkpjw8QIW+R3kW5VA=";}}',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::GGECDM2qq0UAowN3',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ptZuiTJMCRgFtA2V' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/auth/login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\LoginController@index',
        'controller' => 'App\\Http\\Controllers\\Auth\\LoginController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/auth',
        'where' => 
        array (
        ),
        'as' => 'generated::ptZuiTJMCRgFtA2V',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::w0JEBMJgKG1Uzq3L' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/auth/register',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\RegisterController@store',
        'controller' => 'App\\Http\\Controllers\\Auth\\RegisterController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/auth',
        'where' => 
        array (
        ),
        'as' => 'generated::w0JEBMJgKG1Uzq3L',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::2E8deJsrAYuUTRdR' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/auth/organization/register',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\RegisterController@storeOrganization',
        'controller' => 'App\\Http\\Controllers\\Auth\\RegisterController@storeOrganization',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/auth',
        'where' => 
        array (
        ),
        'as' => 'generated::2E8deJsrAYuUTRdR',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::kAiBqNOHNSkHVUWD' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/auth/resend/emailverification/{email}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\RegisterController@resend',
        'controller' => 'App\\Http\\Controllers\\Auth\\RegisterController@resend',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/auth',
        'where' => 
        array (
        ),
        'as' => 'generated::kAiBqNOHNSkHVUWD',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::sGJwbT7dXMndpqb7' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/auth/password/email',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\RegisterController@forget_password',
        'controller' => 'App\\Http\\Controllers\\Auth\\RegisterController@forget_password',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/auth',
        'where' => 
        array (
        ),
        'as' => 'generated::sGJwbT7dXMndpqb7',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::eE2zhtmFAWa8kHuB' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/auth/password/reset',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\RegisterController@reset_password',
        'controller' => 'App\\Http\\Controllers\\Auth\\RegisterController@reset_password',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/auth',
        'where' => 
        array (
        ),
        'as' => 'generated::eE2zhtmFAWa8kHuB',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::gJmOAdmAMorxKfvI' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/auth/forgot_password',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\NewPasswordController@forgotPassword',
        'controller' => 'App\\Http\\Controllers\\Auth\\NewPasswordController@forgotPassword',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/auth',
        'where' => 
        array (
        ),
        'as' => 'generated::gJmOAdmAMorxKfvI',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::wCuWbdjHpnb57KgB' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/auth/admin/login_admin',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\LoginController@loginAdmin',
        'controller' => 'App\\Http\\Controllers\\Auth\\LoginController@loginAdmin',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/auth',
        'where' => 
        array (
        ),
        'as' => 'generated::wCuWbdjHpnb57KgB',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::l8KKXutu3aeo7E2o' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/user',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\HomeController@user',
        'controller' => 'App\\Http\\Controllers\\HomeController@user',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::l8KKXutu3aeo7E2o',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::rPTKupp3k3Afl5jc' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/organization/subscriptions',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\HomeController@orgSubscriptions',
        'controller' => 'App\\Http\\Controllers\\HomeController@orgSubscriptions',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::rPTKupp3k3Afl5jc',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::SfxF9xAhj4B14y6o' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/events/notifications',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\Events\\MainController@unreadNotification',
        'controller' => 'App\\Http\\Controllers\\Events\\MainController@unreadNotification',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::SfxF9xAhj4B14y6o',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::YgN0EXwJUTGPEAYb' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/logout',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\LoginController@apiLogout',
        'controller' => 'App\\Http\\Controllers\\Auth\\LoginController@apiLogout',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::YgN0EXwJUTGPEAYb',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::cfTeOQ4Uk4AsFHUd' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/payments',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\Payment\\PaymentController@index',
        'controller' => 'App\\Http\\Controllers\\Payment\\PaymentController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/payments',
        'where' => 
        array (
        ),
        'as' => 'generated::cfTeOQ4Uk4AsFHUd',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::BZcOfnIa0Fz8ORXX' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/payments/save',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\Payment\\PaymentController@save_data',
        'controller' => 'App\\Http\\Controllers\\Payment\\PaymentController@save_data',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/payments',
        'where' => 
        array (
        ),
        'as' => 'generated::BZcOfnIa0Fz8ORXX',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::fqctJdMgFpL9tFE9' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/payments/create_ticket_after_payment',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\Payment\\PaymentController@create_ticket',
        'controller' => 'App\\Http\\Controllers\\Payment\\PaymentController@create_ticket',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/payments',
        'where' => 
        array (
        ),
        'as' => 'generated::fqctJdMgFpL9tFE9',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::2s6OsKrYBeXwMSXw' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/payments/verify/{ref}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\Payment\\PaymentController@verify',
        'controller' => 'App\\Http\\Controllers\\Payment\\PaymentController@verify',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/payments',
        'where' => 
        array (
        ),
        'as' => 'generated::2s6OsKrYBeXwMSXw',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::A3fLan9irpHjEhVh' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/payments/verify/subscription',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\Payment\\PaymentController@mobile_verify_subscription_payment_and_save',
        'controller' => 'App\\Http\\Controllers\\Payment\\PaymentController@mobile_verify_subscription_payment_and_save',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/payments',
        'where' => 
        array (
        ),
        'as' => 'generated::A3fLan9irpHjEhVh',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::HRR9CDUJmHEwyfte' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/payments/verify/ticket',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\Payment\\PaymentController@mobile_verify_ticket_payment_and_save',
        'controller' => 'App\\Http\\Controllers\\Payment\\PaymentController@mobile_verify_ticket_payment_and_save',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/payments',
        'where' => 
        array (
        ),
        'as' => 'generated::HRR9CDUJmHEwyfte',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::wYFYaQS7xK5TbDHn' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/tickets',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\Ticket\\MainController@index',
        'controller' => 'App\\Http\\Controllers\\Ticket\\MainController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/tickets',
        'where' => 
        array (
        ),
        'as' => 'generated::wYFYaQS7xK5TbDHn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::QYZR5w9sSLVZUucA' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/tickets',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\Ticket\\MainController@store',
        'controller' => 'App\\Http\\Controllers\\Ticket\\MainController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/tickets',
        'where' => 
        array (
        ),
        'as' => 'generated::QYZR5w9sSLVZUucA',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::5uzGODim5lnEkQCH' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/tickets/categories',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\Ticket\\MainController@tickets',
        'controller' => 'App\\Http\\Controllers\\Ticket\\MainController@tickets',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/tickets',
        'where' => 
        array (
        ),
        'as' => 'generated::5uzGODim5lnEkQCH',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::j8M5WIr8IP0BeIkH' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/tickets/buy',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\Ticket\\MainController@buy',
        'controller' => 'App\\Http\\Controllers\\Ticket\\MainController@buy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/tickets',
        'where' => 
        array (
        ),
        'as' => 'generated::j8M5WIr8IP0BeIkH',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::dCBp8rOgBuIWYNTz' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/tickets/buy/free',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\Ticket\\MainController@buy_free',
        'controller' => 'App\\Http\\Controllers\\Ticket\\MainController@buy_free',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/tickets',
        'where' => 
        array (
        ),
        'as' => 'generated::dCBp8rOgBuIWYNTz',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::3SANqvOTBR4ZfBeR' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/tickets/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\Ticket\\MainController@getevent_ticket',
        'controller' => 'App\\Http\\Controllers\\Ticket\\MainController@getevent_ticket',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/tickets',
        'where' => 
        array (
        ),
        'as' => 'generated::3SANqvOTBR4ZfBeR',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::CSC5anoJTKWqySnJ' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/ids',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\IDs\\IDs\\MainController@index',
        'controller' => 'App\\Http\\Controllers\\IDs\\IDs\\MainController@index',
        'namespace' => 'App\\Http\\Controllers\\IDs',
        'prefix' => 'api/ids',
        'where' => 
        array (
        ),
        'as' => 'generated::CSC5anoJTKWqySnJ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::iQ4P9eGJoRkxH86J' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/ids/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\IDs\\MainController@store',
        'controller' => 'App\\Http\\Controllers\\IDs\\MainController@store',
        'namespace' => 'App\\Http\\Controllers\\IDs',
        'prefix' => 'api/ids',
        'where' => 
        array (
        ),
        'as' => 'generated::iQ4P9eGJoRkxH86J',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::AboxRrM0PY30ohTW' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/ids/created_ids',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\IDs\\MainController@created_ids',
        'controller' => 'App\\Http\\Controllers\\IDs\\MainController@created_ids',
        'namespace' => 'App\\Http\\Controllers\\IDs',
        'prefix' => 'api/ids',
        'where' => 
        array (
        ),
        'as' => 'generated::AboxRrM0PY30ohTW',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::xgGdv0hznqikAwdh' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/ids/created_ids/search',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\IDs\\MainController@SearchCreated_ids',
        'controller' => 'App\\Http\\Controllers\\IDs\\MainController@SearchCreated_ids',
        'namespace' => 'App\\Http\\Controllers\\IDs',
        'prefix' => 'api/ids',
        'where' => 
        array (
        ),
        'as' => 'generated::xgGdv0hznqikAwdh',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ROSFjn14Fj3bjfyT' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/ids/created_ids/business',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\IDs\\MainController@business_created_ids',
        'controller' => 'App\\Http\\Controllers\\IDs\\MainController@business_created_ids',
        'namespace' => 'App\\Http\\Controllers\\IDs',
        'prefix' => 'api/ids',
        'where' => 
        array (
        ),
        'as' => 'generated::ROSFjn14Fj3bjfyT',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::kcLuwlC39WSRVz6x' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/ids/created_ids/health',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\IDs\\MainController@health_created_ids',
        'controller' => 'App\\Http\\Controllers\\IDs\\MainController@health_created_ids',
        'namespace' => 'App\\Http\\Controllers\\IDs',
        'prefix' => 'api/ids',
        'where' => 
        array (
        ),
        'as' => 'generated::kcLuwlC39WSRVz6x',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::TsgFIAGIsAXmC3ce' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/ids/created_ids/students',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\IDs\\MainController@students_created_ids',
        'controller' => 'App\\Http\\Controllers\\IDs\\MainController@students_created_ids',
        'namespace' => 'App\\Http\\Controllers\\IDs',
        'prefix' => 'api/ids',
        'where' => 
        array (
        ),
        'as' => 'generated::TsgFIAGIsAXmC3ce',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::DyLGBvU5Xx3kLeSV' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/ids/show/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\IDs\\MainController@show',
        'controller' => 'App\\Http\\Controllers\\IDs\\MainController@show',
        'namespace' => 'App\\Http\\Controllers\\IDs',
        'prefix' => 'api/ids',
        'where' => 
        array (
        ),
        'as' => 'generated::DyLGBvU5Xx3kLeSV',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::3UZBtbamldbxfKgs' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'api/ids/update/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\IDs\\MainController@update',
        'controller' => 'App\\Http\\Controllers\\IDs\\MainController@update',
        'namespace' => 'App\\Http\\Controllers\\IDs',
        'prefix' => 'api/ids',
        'where' => 
        array (
        ),
        'as' => 'generated::3UZBtbamldbxfKgs',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::dNKO17krUuD5Dkg3' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/ids/user',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\IDs\\MainController@getUserIdcard',
        'controller' => 'App\\Http\\Controllers\\IDs\\MainController@getUserIdcard',
        'namespace' => 'App\\Http\\Controllers\\IDs',
        'prefix' => 'api/ids',
        'where' => 
        array (
        ),
        'as' => 'generated::dNKO17krUuD5Dkg3',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::8o8RBlfX7dxwI9Tu' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/ids/user/business',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\IDs\\MainController@getUserbusinessIdcard',
        'controller' => 'App\\Http\\Controllers\\IDs\\MainController@getUserbusinessIdcard',
        'namespace' => 'App\\Http\\Controllers\\IDs',
        'prefix' => 'api/ids',
        'where' => 
        array (
        ),
        'as' => 'generated::8o8RBlfX7dxwI9Tu',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::IclyUWJyAQIXaPvh' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/ids/user/health',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\IDs\\MainController@getUserhealthIdcard',
        'controller' => 'App\\Http\\Controllers\\IDs\\MainController@getUserhealthIdcard',
        'namespace' => 'App\\Http\\Controllers\\IDs',
        'prefix' => 'api/ids',
        'where' => 
        array (
        ),
        'as' => 'generated::IclyUWJyAQIXaPvh',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Tu3CGjcPmE7k1rCj' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/ids/user/students',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\IDs\\MainController@getUserstudentsIdcard',
        'controller' => 'App\\Http\\Controllers\\IDs\\MainController@getUserstudentsIdcard',
        'namespace' => 'App\\Http\\Controllers\\IDs',
        'prefix' => 'api/ids',
        'where' => 
        array (
        ),
        'as' => 'generated::Tu3CGjcPmE7k1rCj',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::xIMX2YRQKgJ1kG2V' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/ids/organization',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\IDs\\IDs\\MainController@getOrgIdcard',
        'controller' => 'App\\Http\\Controllers\\IDs\\IDs\\MainController@getOrgIdcard',
        'namespace' => 'App\\Http\\Controllers\\IDs',
        'prefix' => 'api/ids',
        'where' => 
        array (
        ),
        'as' => 'generated::xIMX2YRQKgJ1kG2V',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::PwQrPjbndyFuFIbU' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/ids/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\IDs\\MainController@destroy',
        'controller' => 'App\\Http\\Controllers\\IDs\\MainController@destroy',
        'namespace' => 'App\\Http\\Controllers\\IDs',
        'prefix' => 'api/ids',
        'where' => 
        array (
        ),
        'as' => 'generated::PwQrPjbndyFuFIbU',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Kcn6Rjyfu1odJcjO' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/users',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\MainController@index',
        'controller' => 'App\\Http\\Controllers\\User\\MainController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/users',
        'where' => 
        array (
        ),
        'as' => 'generated::Kcn6Rjyfu1odJcjO',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::w9LAOcHWUSGAT2Wp' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/users/roles',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\MainController@roles',
        'controller' => 'App\\Http\\Controllers\\User\\MainController@roles',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/users',
        'where' => 
        array (
        ),
        'as' => 'generated::w9LAOcHWUSGAT2Wp',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::zFy7oLKiD0Fz4sG9' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/users/notifications',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\MainController@notifications',
        'controller' => 'App\\Http\\Controllers\\User\\MainController@notifications',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/users',
        'where' => 
        array (
        ),
        'as' => 'generated::zFy7oLKiD0Fz4sG9',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::9em9fGCxmP0lMP88' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/users/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\MainController@getUser',
        'controller' => 'App\\Http\\Controllers\\User\\MainController@getUser',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/users',
        'where' => 
        array (
        ),
        'as' => 'generated::9em9fGCxmP0lMP88',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::lWvDacfVWFcGf9WD' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/users/user/idcardnumber',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\MainController@getUserByIdNumber',
        'controller' => 'App\\Http\\Controllers\\User\\MainController@getUserByIdNumber',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/users',
        'where' => 
        array (
        ),
        'as' => 'generated::lWvDacfVWFcGf9WD',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::74X0m32MHUKsx26Y' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/users/username/{username}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\MainController@profile',
        'controller' => 'App\\Http\\Controllers\\User\\MainController@profile',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/users',
        'where' => 
        array (
        ),
        'as' => 'generated::74X0m32MHUKsx26Y',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::nVgLuFHZGqTVm6ZY' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/users/individual/get',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\MainController@getIndividualUsers',
        'controller' => 'App\\Http\\Controllers\\User\\MainController@getIndividualUsers',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/users',
        'where' => 
        array (
        ),
        'as' => 'generated::nVgLuFHZGqTVm6ZY',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::wqrdg1OSY7ImMAf2' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/users/organization/get',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\MainController@getOrganizationUsers',
        'controller' => 'App\\Http\\Controllers\\User\\MainController@getOrganizationUsers',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/users',
        'where' => 
        array (
        ),
        'as' => 'generated::wqrdg1OSY7ImMAf2',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::5xsZ4mSOj7nb9Cb1' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/users/organization/role/get',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\MainController@getOrganizationRoles',
        'controller' => 'App\\Http\\Controllers\\User\\MainController@getOrganizationRoles',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/users',
        'where' => 
        array (
        ),
        'as' => 'generated::5xsZ4mSOj7nb9Cb1',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::1iCRU4rsHaMkEN0R' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/users/user/get',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\MainController@SearchUserByuserName',
        'controller' => 'App\\Http\\Controllers\\User\\MainController@SearchUserByuserName',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/users',
        'where' => 
        array (
        ),
        'as' => 'generated::1iCRU4rsHaMkEN0R',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::DVCOpr04XBoH7Yq3' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/users/user/verify',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\User\\MainController@verifyUser',
        'controller' => 'App\\Http\\Controllers\\User\\MainController@verifyUser',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/users',
        'where' => 
        array (
        ),
        'as' => 'generated::DVCOpr04XBoH7Yq3',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::XkJCcp2AEQrPmfCp' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/individuals',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
          4 => 'App\\Http\\Middleware\\CheckUserisIndividual',
        ),
        'uses' => 'App\\Http\\Controllers\\Individual\\MainController@index',
        'controller' => 'App\\Http\\Controllers\\Individual\\MainController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/individuals',
        'where' => 
        array (
        ),
        'as' => 'generated::XkJCcp2AEQrPmfCp',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::uWSAbsDD6T69gsz2' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/individuals/getUser',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
          4 => 'App\\Http\\Middleware\\CheckUserisIndividual',
        ),
        'uses' => 'App\\Http\\Controllers\\Individual\\MainController@getUser',
        'controller' => 'App\\Http\\Controllers\\Individual\\MainController@getUser',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/individuals',
        'where' => 
        array (
        ),
        'as' => 'generated::uWSAbsDD6T69gsz2',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::D3FzAQxy9ahOwTT1' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/individuals/mobileStats',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
          4 => 'App\\Http\\Middleware\\CheckUserisIndividual',
        ),
        'uses' => 'App\\Http\\Controllers\\Individual\\MainController@mobileStats',
        'controller' => 'App\\Http\\Controllers\\Individual\\MainController@mobileStats',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/individuals',
        'where' => 
        array (
        ),
        'as' => 'generated::D3FzAQxy9ahOwTT1',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::oejR2R5BUiFR7tNI' => 
    array (
      'methods' => 
      array (
        0 => 'PATCH',
      ),
      'uri' => 'api/individuals',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
          4 => 'App\\Http\\Middleware\\CheckUserisIndividual',
        ),
        'uses' => 'App\\Http\\Controllers\\Individual\\MainController@update',
        'controller' => 'App\\Http\\Controllers\\Individual\\MainController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/individuals',
        'where' => 
        array (
        ),
        'as' => 'generated::oejR2R5BUiFR7tNI',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Ye6E1Smu3o9hSNpq' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/individuals/all',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
          4 => 'App\\Http\\Middleware\\CheckUserisIndividual',
        ),
        'uses' => 'App\\Http\\Controllers\\Individual\\MainController@allIndividuals',
        'controller' => 'App\\Http\\Controllers\\Individual\\MainController@allIndividuals',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/individuals',
        'where' => 
        array (
        ),
        'as' => 'generated::Ye6E1Smu3o9hSNpq',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ThbqTNCO5T5098i4' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/individuals/organizations/join-requests',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
          4 => 'App\\Http\\Middleware\\CheckUserisIndividual',
        ),
        'uses' => 'App\\Http\\Controllers\\Individual\\MainController@organizations_join_request',
        'controller' => 'App\\Http\\Controllers\\Individual\\MainController@organizations_join_request',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/individuals',
        'where' => 
        array (
        ),
        'as' => 'generated::ThbqTNCO5T5098i4',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::y0evV4bwRa47Qg5H' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/individuals/organizations/join-request',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
          4 => 'App\\Http\\Middleware\\CheckUserisIndividual',
        ),
        'uses' => 'App\\Http\\Controllers\\Individual\\MainController@send_join_request_Organization',
        'controller' => 'App\\Http\\Controllers\\Individual\\MainController@send_join_request_Organization',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/individuals',
        'where' => 
        array (
        ),
        'as' => 'generated::y0evV4bwRa47Qg5H',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::8NzCy0G8UA96aoZc' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/individuals/organizations',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
          4 => 'App\\Http\\Middleware\\CheckUserisIndividual',
        ),
        'uses' => 'App\\Http\\Controllers\\Individual\\MainController@joined_Organization',
        'controller' => 'App\\Http\\Controllers\\Individual\\MainController@joined_Organization',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/individuals',
        'where' => 
        array (
        ),
        'as' => 'generated::8NzCy0G8UA96aoZc',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::f6JNWcvRf1ECnGkh' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/individuals/organizations/{query}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
          4 => 'App\\Http\\Middleware\\CheckUserisIndividual',
        ),
        'uses' => 'App\\Http\\Controllers\\Individual\\MainController@search_joined_Organization',
        'controller' => 'App\\Http\\Controllers\\Individual\\MainController@search_joined_Organization',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/individuals',
        'where' => 
        array (
        ),
        'as' => 'generated::f6JNWcvRf1ECnGkh',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::CPq4uVw04wZSLQRD' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/individuals/organizations/subscriptions/plans/search',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
          4 => 'App\\Http\\Middleware\\CheckUserisIndividual',
        ),
        'uses' => 'App\\Http\\Controllers\\Individual\\MainController@search_Organization_plan',
        'controller' => 'App\\Http\\Controllers\\Individual\\MainController@search_Organization_plan',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/individuals',
        'where' => 
        array (
        ),
        'as' => 'generated::CPq4uVw04wZSLQRD',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::emVl6MtOkRKl5viO' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/individuals/organizations/subscriptions/active/all',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
          4 => 'App\\Http\\Middleware\\CheckUserisIndividual',
        ),
        'uses' => 'App\\Http\\Controllers\\Individual\\MainController@allUserActiveSubscription',
        'controller' => 'App\\Http\\Controllers\\Individual\\MainController@allUserActiveSubscription',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/individuals',
        'where' => 
        array (
        ),
        'as' => 'generated::emVl6MtOkRKl5viO',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::5QfCZRzt0wMgABCK' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/individuals/organizations/subscriptions/expired/all',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
          4 => 'App\\Http\\Middleware\\CheckUserisIndividual',
        ),
        'uses' => 'App\\Http\\Controllers\\Individual\\MainController@allUserExpiredSubscription',
        'controller' => 'App\\Http\\Controllers\\Individual\\MainController@allUserExpiredSubscription',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/individuals',
        'where' => 
        array (
        ),
        'as' => 'generated::5QfCZRzt0wMgABCK',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::kGvRzHT2rR5zJcUO' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/individuals/organizations/{id}/subscriptions',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
          4 => 'App\\Http\\Middleware\\CheckUserisIndividual',
        ),
        'uses' => 'App\\Http\\Controllers\\Individual\\MainController@organization_subscriptions',
        'controller' => 'App\\Http\\Controllers\\Individual\\MainController@organization_subscriptions',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/individuals',
        'where' => 
        array (
        ),
        'as' => 'generated::kGvRzHT2rR5zJcUO',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::i13hP3khzDLGFAiD' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/individuals/organizations/{id}/plans',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
          4 => 'App\\Http\\Middleware\\CheckUserisIndividual',
        ),
        'uses' => 'App\\Http\\Controllers\\Individual\\MainController@organization_subscription_plans',
        'controller' => 'App\\Http\\Controllers\\Individual\\MainController@organization_subscription_plans',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/individuals',
        'where' => 
        array (
        ),
        'as' => 'generated::i13hP3khzDLGFAiD',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::vOeRLteVCa5xiByt' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/individuals/organizations/subscription/pay',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
          4 => 'App\\Http\\Middleware\\CheckUserisIndividual',
        ),
        'uses' => 'App\\Http\\Controllers\\Individual\\MainController@intiateSubscriptionPayment',
        'controller' => 'App\\Http\\Controllers\\Individual\\MainController@intiateSubscriptionPayment',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/individuals',
        'where' => 
        array (
        ),
        'as' => 'generated::vOeRLteVCa5xiByt',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::qy9bR5gwYkoOEFOV' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/organizations',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
          4 => 'App\\Http\\Middleware\\CheckUserisOrganization',
        ),
        'uses' => 'App\\Http\\Controllers\\Organization\\MainController@index',
        'controller' => 'App\\Http\\Controllers\\Organization\\MainController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/organizations',
        'where' => 
        array (
        ),
        'as' => 'generated::qy9bR5gwYkoOEFOV',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::MUY0WZJR9um1D8SX' => 
    array (
      'methods' => 
      array (
        0 => 'PATCH',
      ),
      'uri' => 'api/organizations',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
          4 => 'App\\Http\\Middleware\\CheckUserisOrganization',
        ),
        'uses' => 'App\\Http\\Controllers\\Organization\\MainController@update',
        'controller' => 'App\\Http\\Controllers\\Organization\\MainController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/organizations',
        'where' => 
        array (
        ),
        'as' => 'generated::MUY0WZJR9um1D8SX',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::psuMpb8ppMH4T6xb' => 
    array (
      'methods' => 
      array (
        0 => 'PATCH',
      ),
      'uri' => 'api/organizations/change_password',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
          4 => 'App\\Http\\Middleware\\CheckUserisOrganization',
        ),
        'uses' => 'App\\Http\\Controllers\\Organization\\MainController@updatePassword',
        'controller' => 'App\\Http\\Controllers\\Organization\\MainController@updatePassword',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/organizations',
        'where' => 
        array (
        ),
        'as' => 'generated::psuMpb8ppMH4T6xb',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::edFWqZplZGhXvVuB' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/organizations/getUser',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
          4 => 'App\\Http\\Middleware\\CheckUserisOrganization',
        ),
        'uses' => 'App\\Http\\Controllers\\Organization\\MainController@getUser',
        'controller' => 'App\\Http\\Controllers\\Organization\\MainController@getUser',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/organizations',
        'where' => 
        array (
        ),
        'as' => 'generated::edFWqZplZGhXvVuB',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::uZFocyuHBgparv0b' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/organizations/mobileStats',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
          4 => 'App\\Http\\Middleware\\CheckUserisOrganization',
        ),
        'uses' => 'App\\Http\\Controllers\\Organization\\MainController@mobileStats',
        'controller' => 'App\\Http\\Controllers\\Organization\\MainController@mobileStats',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/organizations',
        'where' => 
        array (
        ),
        'as' => 'generated::uZFocyuHBgparv0b',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::d3UFupAUfHhEdFHw' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/organizations/members',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
          4 => 'App\\Http\\Middleware\\CheckUserisOrganization',
        ),
        'uses' => 'App\\Http\\Controllers\\Organization\\MemberController@index',
        'controller' => 'App\\Http\\Controllers\\Organization\\MemberController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/organizations',
        'where' => 
        array (
        ),
        'as' => 'generated::d3UFupAUfHhEdFHw',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::qhE10uNGKV68INrT' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/organizations/members/search',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
          4 => 'App\\Http\\Middleware\\CheckUserisOrganization',
        ),
        'uses' => 'App\\Http\\Controllers\\Organization\\MemberController@searchMember',
        'controller' => 'App\\Http\\Controllers\\Organization\\MemberController@searchMember',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/organizations',
        'where' => 
        array (
        ),
        'as' => 'generated::qhE10uNGKV68INrT',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::5gQrUoHA8XfKhjJx' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/organizations/members/active',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
          4 => 'App\\Http\\Middleware\\CheckUserisOrganization',
        ),
        'uses' => 'App\\Http\\Controllers\\Organization\\MemberController@active_member',
        'controller' => 'App\\Http\\Controllers\\Organization\\MemberController@active_member',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/organizations',
        'where' => 
        array (
        ),
        'as' => 'generated::5gQrUoHA8XfKhjJx',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::4fX9MGD6T9bz8gBs' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/organizations/members/unactive',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
          4 => 'App\\Http\\Middleware\\CheckUserisOrganization',
        ),
        'uses' => 'App\\Http\\Controllers\\Organization\\MemberController@unactive_member',
        'controller' => 'App\\Http\\Controllers\\Organization\\MemberController@unactive_member',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/organizations',
        'where' => 
        array (
        ),
        'as' => 'generated::4fX9MGD6T9bz8gBs',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::N5j2aN0sjSiNsJUc' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/organizations/members/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
          4 => 'App\\Http\\Middleware\\CheckUserisOrganization',
        ),
        'uses' => 'App\\Http\\Controllers\\Organization\\MemberController@show',
        'controller' => 'App\\Http\\Controllers\\Organization\\MemberController@show',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/organizations',
        'where' => 
        array (
        ),
        'as' => 'generated::N5j2aN0sjSiNsJUc',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::OM33kUc1yinTnlD1' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/organizations/members',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
          4 => 'App\\Http\\Middleware\\CheckUserisOrganization',
        ),
        'uses' => 'App\\Http\\Controllers\\Organization\\MemberController@store',
        'controller' => 'App\\Http\\Controllers\\Organization\\MemberController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/organizations',
        'where' => 
        array (
        ),
        'as' => 'generated::OM33kUc1yinTnlD1',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Esz3oIIVKnwdk1vO' => 
    array (
      'methods' => 
      array (
        0 => 'PATCH',
      ),
      'uri' => 'api/organizations/members/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
          4 => 'App\\Http\\Middleware\\CheckUserisOrganization',
        ),
        'uses' => 'App\\Http\\Controllers\\Organization\\MemberController@update',
        'controller' => 'App\\Http\\Controllers\\Organization\\MemberController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/organizations',
        'where' => 
        array (
        ),
        'as' => 'generated::Esz3oIIVKnwdk1vO',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::u05jLVJZIxutx0j4' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/organizations/members/requests/get',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
          4 => 'App\\Http\\Middleware\\CheckUserisOrganization',
        ),
        'uses' => 'App\\Http\\Controllers\\Organization\\MemberController@my_requests',
        'controller' => 'App\\Http\\Controllers\\Organization\\MemberController@my_requests',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/organizations',
        'where' => 
        array (
        ),
        'as' => 'generated::u05jLVJZIxutx0j4',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::GBcut0hrDsO6wLXj' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/organizations/members/requests/approve/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
          4 => 'App\\Http\\Middleware\\CheckUserisOrganization',
        ),
        'uses' => 'App\\Http\\Controllers\\Organization\\MemberController@approve_request',
        'controller' => 'App\\Http\\Controllers\\Organization\\MemberController@approve_request',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/organizations',
        'where' => 
        array (
        ),
        'as' => 'generated::GBcut0hrDsO6wLXj',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::sBmigLmwwuaojbZb' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/organizations/members/requests/decline/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
          4 => 'App\\Http\\Middleware\\CheckUserisOrganization',
        ),
        'uses' => 'App\\Http\\Controllers\\Organization\\MemberController@decline_request',
        'controller' => 'App\\Http\\Controllers\\Organization\\MemberController@decline_request',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/organizations',
        'where' => 
        array (
        ),
        'as' => 'generated::sBmigLmwwuaojbZb',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ZCB3O1j5xj08ksPh' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/organizations/members/requests/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
          4 => 'App\\Http\\Middleware\\CheckUserisOrganization',
        ),
        'uses' => 'App\\Http\\Controllers\\Organization\\MemberController@get_requests_info',
        'controller' => 'App\\Http\\Controllers\\Organization\\MemberController@get_requests_info',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/organizations',
        'where' => 
        array (
        ),
        'as' => 'generated::ZCB3O1j5xj08ksPh',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::86HVe6zzcQz1sGaq' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/organizations/members/activate/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
          4 => 'App\\Http\\Middleware\\CheckUserisOrganization',
        ),
        'uses' => 'App\\Http\\Controllers\\Organization\\MemberController@activate',
        'controller' => 'App\\Http\\Controllers\\Organization\\MemberController@activate',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/organizations',
        'where' => 
        array (
        ),
        'as' => 'generated::86HVe6zzcQz1sGaq',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::tDunv49nmispFZq7' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/organizations/members/deactivate/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
          4 => 'App\\Http\\Middleware\\CheckUserisOrganization',
        ),
        'uses' => 'App\\Http\\Controllers\\Organization\\MemberController@deactivate',
        'controller' => 'App\\Http\\Controllers\\Organization\\MemberController@deactivate',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/organizations',
        'where' => 
        array (
        ),
        'as' => 'generated::tDunv49nmispFZq7',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::vSgbSDzdScSzMOtz' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/organizations/members/add_and_approve',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
          4 => 'App\\Http\\Middleware\\CheckUserisOrganization',
        ),
        'uses' => 'App\\Http\\Controllers\\Organization\\MemberController@add_approve',
        'controller' => 'App\\Http\\Controllers\\Organization\\MemberController@add_approve',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/organizations',
        'where' => 
        array (
        ),
        'as' => 'generated::vSgbSDzdScSzMOtz',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Zmob7RmHYHUGKijU' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/organizations/members/add_no_subscription',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
          4 => 'App\\Http\\Middleware\\CheckUserisOrganization',
        ),
        'uses' => 'App\\Http\\Controllers\\Organization\\MemberController@add_no_subscription',
        'controller' => 'App\\Http\\Controllers\\Organization\\MemberController@add_no_subscription',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/organizations',
        'where' => 
        array (
        ),
        'as' => 'generated::Zmob7RmHYHUGKijU',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::6ctk91Jtgobm3yJP' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/organizations/add-and-approve',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
          4 => 'App\\Http\\Middleware\\CheckUserisOrganization',
        ),
        'uses' => 'App\\Http\\Controllers\\Organization\\MemberController@addApprove',
        'controller' => 'App\\Http\\Controllers\\Organization\\MemberController@addApprove',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/organizations',
        'where' => 
        array (
        ),
        'as' => 'generated::6ctk91Jtgobm3yJP',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::2Nrl8aYinAuHwdGW' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/organizations/subscriptions',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
          4 => 'App\\Http\\Middleware\\CheckUserisOrganization',
        ),
        'uses' => 'App\\Http\\Controllers\\Organization\\SubscriptionController@index',
        'controller' => 'App\\Http\\Controllers\\Organization\\SubscriptionController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/organizations',
        'where' => 
        array (
        ),
        'as' => 'generated::2Nrl8aYinAuHwdGW',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::apW9KcAwzug79p76' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/organizations/subscriptions/expired',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
          4 => 'App\\Http\\Middleware\\CheckUserisOrganization',
        ),
        'uses' => 'App\\Http\\Controllers\\Organization\\SubscriptionController@expired_subscription',
        'controller' => 'App\\Http\\Controllers\\Organization\\SubscriptionController@expired_subscription',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/organizations',
        'where' => 
        array (
        ),
        'as' => 'generated::apW9KcAwzug79p76',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::9fEjquPQXPmBAmDm' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/organizations/subscriptions/active',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
          4 => 'App\\Http\\Middleware\\CheckUserisOrganization',
        ),
        'uses' => 'App\\Http\\Controllers\\Organization\\SubscriptionController@active_subscription',
        'controller' => 'App\\Http\\Controllers\\Organization\\SubscriptionController@active_subscription',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/organizations',
        'where' => 
        array (
        ),
        'as' => 'generated::9fEjquPQXPmBAmDm',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::EROOKuxl75TJ3pf9' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/organizations/subscriptions/plans/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
          4 => 'App\\Http\\Middleware\\CheckUserisOrganization',
        ),
        'uses' => 'App\\Http\\Controllers\\Organization\\SubscriptionController@store_plan',
        'controller' => 'App\\Http\\Controllers\\Organization\\SubscriptionController@store_plan',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/organizations',
        'where' => 
        array (
        ),
        'as' => 'generated::EROOKuxl75TJ3pf9',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::fGcFiNNXM4lrjDoB' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'api/organizations/subscriptions/plans/update/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
          4 => 'App\\Http\\Middleware\\CheckUserisOrganization',
        ),
        'uses' => 'App\\Http\\Controllers\\Organization\\SubscriptionController@update_plan',
        'controller' => 'App\\Http\\Controllers\\Organization\\SubscriptionController@update_plan',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/organizations',
        'where' => 
        array (
        ),
        'as' => 'generated::fGcFiNNXM4lrjDoB',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::UlSz6wm5a1EVqADd' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/organizations/subscriptions/plans/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
          4 => 'App\\Http\\Middleware\\CheckUserisOrganization',
        ),
        'uses' => 'App\\Http\\Controllers\\Organization\\SubscriptionController@delete_plan',
        'controller' => 'App\\Http\\Controllers\\Organization\\SubscriptionController@delete_plan',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/organizations',
        'where' => 
        array (
        ),
        'as' => 'generated::UlSz6wm5a1EVqADd',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::YyBIVCiv6d9QWIlv' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/organizations/subscriptions/plans',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
          4 => 'App\\Http\\Middleware\\CheckUserisOrganization',
        ),
        'uses' => 'App\\Http\\Controllers\\Organization\\SubscriptionController@plans',
        'controller' => 'App\\Http\\Controllers\\Organization\\SubscriptionController@plans',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/organizations',
        'where' => 
        array (
        ),
        'as' => 'generated::YyBIVCiv6d9QWIlv',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::zEsWdvtyuJTdswnh' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/organizations/subscriptions/plans/byOrg',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
          4 => 'App\\Http\\Middleware\\CheckUserisOrganization',
        ),
        'uses' => 'App\\Http\\Controllers\\Organization\\SubscriptionController@plansbyOrg',
        'controller' => 'App\\Http\\Controllers\\Organization\\SubscriptionController@plansbyOrg',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/organizations',
        'where' => 
        array (
        ),
        'as' => 'generated::zEsWdvtyuJTdswnh',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::nvvhuvko59AtLT99' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/organizations/subscriptions',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
          4 => 'App\\Http\\Middleware\\CheckUserisOrganization',
        ),
        'uses' => 'App\\Http\\Controllers\\Organization\\SubscriptionController@store',
        'controller' => 'App\\Http\\Controllers\\Organization\\SubscriptionController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/organizations',
        'where' => 
        array (
        ),
        'as' => 'generated::nvvhuvko59AtLT99',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::2oN73yIMrI5WBYPd' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/organizations/subscribe',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
          4 => 'App\\Http\\Middleware\\CheckUserisOrganization',
        ),
        'uses' => 'App\\Http\\Controllers\\Organization\\SubscriptionController@userSubscribe',
        'controller' => 'App\\Http\\Controllers\\Organization\\SubscriptionController@userSubscribe',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/organizations',
        'where' => 
        array (
        ),
        'as' => 'generated::2oN73yIMrI5WBYPd',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::amTCjMECvfcjwJ52' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'api/organizations/subscriptions/{id}/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
          4 => 'App\\Http\\Middleware\\CheckUserisOrganization',
        ),
        'uses' => 'App\\Http\\Controllers\\Organization\\SubscriptionController@updateSubscription',
        'controller' => 'App\\Http\\Controllers\\Organization\\SubscriptionController@updateSubscription',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/organizations',
        'where' => 
        array (
        ),
        'as' => 'generated::amTCjMECvfcjwJ52',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::nXMKRRRnV6vUin0v' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/organizations/categories',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
          4 => 'App\\Http\\Middleware\\CheckUserisOrganization',
        ),
        'uses' => 'App\\Http\\Controllers\\Organization\\CategoryController@index',
        'controller' => 'App\\Http\\Controllers\\Organization\\CategoryController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/organizations',
        'where' => 
        array (
        ),
        'as' => 'generated::nXMKRRRnV6vUin0v',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::9PdmC4XNkIAbxJ3N' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/organizations/categories',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
          4 => 'App\\Http\\Middleware\\CheckUserisOrganization',
        ),
        'uses' => 'App\\Http\\Controllers\\Organization\\CategoryController@store',
        'controller' => 'App\\Http\\Controllers\\Organization\\CategoryController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/organizations',
        'where' => 
        array (
        ),
        'as' => 'generated::9PdmC4XNkIAbxJ3N',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::eNWWOtQSiOqWk32C' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/id-card/templates',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\Organization\\IDTemplateController@index',
        'controller' => 'App\\Http\\Controllers\\Organization\\IDTemplateController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/id-card/templates',
        'where' => 
        array (
        ),
        'as' => 'generated::eNWWOtQSiOqWk32C',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::wk00tJtOH7BF8nUN' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/id-card/templates/add',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\Organization\\IDTemplateController@store',
        'controller' => 'App\\Http\\Controllers\\Organization\\IDTemplateController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/id-card/templates',
        'where' => 
        array (
        ),
        'as' => 'generated::wk00tJtOH7BF8nUN',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::VQXHslKWmzm1jrKb' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/id-card/templates/update/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\Organization\\IDTemplateController@update',
        'controller' => 'App\\Http\\Controllers\\Organization\\IDTemplateController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/id-card/templates',
        'where' => 
        array (
        ),
        'as' => 'generated::VQXHslKWmzm1jrKb',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::eysZtIAvh60C08Vm' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/id-card/templates/delete/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\Organization\\IDTemplateController@delete',
        'controller' => 'App\\Http\\Controllers\\Organization\\IDTemplateController@delete',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/id-card/templates',
        'where' => 
        array (
        ),
        'as' => 'generated::eysZtIAvh60C08Vm',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::MGNkCk1iYujL31XP' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/id-card-management',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\IDs\\IDController@index',
        'controller' => 'App\\Http\\Controllers\\IDs\\IDController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/id-card-management',
        'where' => 
        array (
        ),
        'as' => 'generated::MGNkCk1iYujL31XP',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::rZVkGOPYISDcPUXX' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/id-card-management/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\IDs\\IDController@store',
        'controller' => 'App\\Http\\Controllers\\IDs\\IDController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/id-card-management',
        'where' => 
        array (
        ),
        'as' => 'generated::rZVkGOPYISDcPUXX',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::G2VQOFeev6hv5h0Q' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/id-card-management/pending/id-card/individual',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\IDs\\IDController@pending_individual',
        'controller' => 'App\\Http\\Controllers\\IDs\\IDController@pending_individual',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/id-card-management',
        'where' => 
        array (
        ),
        'as' => 'generated::G2VQOFeev6hv5h0Q',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::vqAWE0r308oI81z5' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/id-card-management/pending/id-card/organization',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\IDs\\IDController@pending_organization',
        'controller' => 'App\\Http\\Controllers\\IDs\\IDController@pending_organization',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/id-card-management',
        'where' => 
        array (
        ),
        'as' => 'generated::vqAWE0r308oI81z5',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::egR3FskXMdSlEfPR' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/id-card-management/process/id-card/organization/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\IDs\\IDController@process_idCard_organization',
        'controller' => 'App\\Http\\Controllers\\IDs\\IDController@process_idCard_organization',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/id-card-management',
        'where' => 
        array (
        ),
        'as' => 'generated::egR3FskXMdSlEfPR',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::hQMXj79R9BAQDZr5' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/id-card-management/organization/approved/id-card',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\IDs\\IDController@approved_idCard',
        'controller' => 'App\\Http\\Controllers\\IDs\\IDController@approved_idCard',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/id-card-management/organization',
        'where' => 
        array (
        ),
        'as' => 'generated::hQMXj79R9BAQDZr5',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::cr9fkAT3BG6BA4F0' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/id-card-management/organization/pending/id-card',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\IDs\\IDController@pending_idCard',
        'controller' => 'App\\Http\\Controllers\\IDs\\IDController@pending_idCard',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/id-card-management/organization',
        'where' => 
        array (
        ),
        'as' => 'generated::cr9fkAT3BG6BA4F0',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::2yoGL577C1Yfp2f7' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/id-card-management/organization/declined/id-card',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\IDs\\IDController@declined_idCard',
        'controller' => 'App\\Http\\Controllers\\IDs\\IDController@declined_idCard',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/id-card-management/organization',
        'where' => 
        array (
        ),
        'as' => 'generated::2yoGL577C1Yfp2f7',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::YmV1ApxUb2h88tOS' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/id-card-management/organization/process/id-card/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\IDs\\IDController@process_idCard',
        'controller' => 'App\\Http\\Controllers\\IDs\\IDController@process_idCard',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/id-card-management/organization',
        'where' => 
        array (
        ),
        'as' => 'generated::YmV1ApxUb2h88tOS',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::f785rSGQLzjuAhp8' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/id-card-management/organization/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\IDs\\IDController@create',
        'controller' => 'App\\Http\\Controllers\\IDs\\IDController@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/id-card-management/organization',
        'where' => 
        array (
        ),
        'as' => 'generated::f785rSGQLzjuAhp8',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::EWk23fmlVbVctt8E' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/verificaton',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\Verification\\MainController@index',
        'controller' => 'App\\Http\\Controllers\\Verification\\MainController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/verificaton',
        'where' => 
        array (
        ),
        'as' => 'generated::EWk23fmlVbVctt8E',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Z37GsvCdYHEo44Kq' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/verificaton/send-request',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\Verification\\MainController@send_request',
        'controller' => 'App\\Http\\Controllers\\Verification\\MainController@send_request',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/verificaton',
        'where' => 
        array (
        ),
        'as' => 'generated::Z37GsvCdYHEo44Kq',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::9Dx5Fox1QiynBzAP' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/verificaton/view-request',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\Verification\\MainController@verification_requests',
        'controller' => 'App\\Http\\Controllers\\Verification\\MainController@verification_requests',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/verificaton',
        'where' => 
        array (
        ),
        'as' => 'generated::9Dx5Fox1QiynBzAP',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::53RLXODhbFjnbS8n' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/verificaton/organization/add',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\Verification\\MainController@add',
        'controller' => 'App\\Http\\Controllers\\Verification\\MainController@add',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/verificaton/organization',
        'where' => 
        array (
        ),
        'as' => 'generated::53RLXODhbFjnbS8n',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ajpnync0icBB36Q6' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/verificaton/organization/verifiers',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\Verification\\MainController@verifiers',
        'controller' => 'App\\Http\\Controllers\\Verification\\MainController@verifiers',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/verificaton/organization',
        'where' => 
        array (
        ),
        'as' => 'generated::ajpnync0icBB36Q6',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Ij54ugM4v6eXteSs' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/verificaton/organization/pending',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\Verification\\MainController@pending',
        'controller' => 'App\\Http\\Controllers\\Verification\\MainController@pending',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/verificaton/organization',
        'where' => 
        array (
        ),
        'as' => 'generated::Ij54ugM4v6eXteSs',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ASGGHqdv7iIg7sJh' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/verificaton/organization/decline',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\Verification\\MainController@getdecline',
        'controller' => 'App\\Http\\Controllers\\Verification\\MainController@getdecline',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/verificaton/organization',
        'where' => 
        array (
        ),
        'as' => 'generated::ASGGHqdv7iIg7sJh',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::FaDto8Ma8BaVMCYw' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/verificaton/organization/approve/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\Verification\\MainController@approve',
        'controller' => 'App\\Http\\Controllers\\Verification\\MainController@approve',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/verificaton/organization',
        'where' => 
        array (
        ),
        'as' => 'generated::FaDto8Ma8BaVMCYw',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::FTFa6jafbP6FdQvL' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/verificaton/organization/decline/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\Verification\\MainController@decline',
        'controller' => 'App\\Http\\Controllers\\Verification\\MainController@decline',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/verificaton/organization',
        'where' => 
        array (
        ),
        'as' => 'generated::FTFa6jafbP6FdQvL',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::fDDzXjEnnDVajPJV' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/profile/picture',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\Profile\\MainController@upload_profile_picture',
        'controller' => 'App\\Http\\Controllers\\Profile\\MainController@upload_profile_picture',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/profile',
        'where' => 
        array (
        ),
        'as' => 'generated::fDDzXjEnnDVajPJV',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::lhSZv9KWP7VXqxjN' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/profile/password/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\Profile\\MainController@update_password',
        'controller' => 'App\\Http\\Controllers\\Profile\\MainController@update_password',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/profile',
        'where' => 
        array (
        ),
        'as' => 'generated::lhSZv9KWP7VXqxjN',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::g3Gf5vYSMUtBui3P' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/profile/individual/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\Profile\\MainController@update_individual_profile',
        'controller' => 'App\\Http\\Controllers\\Profile\\MainController@update_individual_profile',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/profile',
        'where' => 
        array (
        ),
        'as' => 'generated::g3Gf5vYSMUtBui3P',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::zH3SUaEU5kYcj64R' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/profile/organization/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\Profile\\MainController@update_organization_profile',
        'controller' => 'App\\Http\\Controllers\\Profile\\MainController@update_organization_profile',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/profile',
        'where' => 
        array (
        ),
        'as' => 'generated::zH3SUaEU5kYcj64R',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::O3D3xHrJk9mIgj9J' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/events',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\Events\\MainController@index',
        'controller' => 'App\\Http\\Controllers\\Events\\MainController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/events',
        'where' => 
        array (
        ),
        'as' => 'generated::O3D3xHrJk9mIgj9J',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::MmS5ktXtUJWo0ScR' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/events/searchbyname/get',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\Events\\MainController@SearchByName',
        'controller' => 'App\\Http\\Controllers\\Events\\MainController@SearchByName',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/events',
        'where' => 
        array (
        ),
        'as' => 'generated::MmS5ktXtUJWo0ScR',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::SSdD3L8XOGV8S93N' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/events/upcoming',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\Events\\MainController@upcomingEvents',
        'controller' => 'App\\Http\\Controllers\\Events\\MainController@upcomingEvents',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/events',
        'where' => 
        array (
        ),
        'as' => 'generated::SSdD3L8XOGV8S93N',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::JCzxgYm2Hu4GdKdO' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/events/open/upcoming',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\Events\\MainController@OpenUpcomingEventsbyOtherUsers',
        'controller' => 'App\\Http\\Controllers\\Events\\MainController@OpenUpcomingEventsbyOtherUsers',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/events',
        'where' => 
        array (
        ),
        'as' => 'generated::JCzxgYm2Hu4GdKdO',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::mdcdLalPpoGwkPpD' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/events/past',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\Events\\MainController@pastEvents',
        'controller' => 'App\\Http\\Controllers\\Events\\MainController@pastEvents',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/events',
        'where' => 
        array (
        ),
        'as' => 'generated::mdcdLalPpoGwkPpD',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::8gl6L6BPO5xHBg9d' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/events/SearchOpenUpcoming',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\Events\\MainController@SearchOpenUpcomingEventsbyOtherUsers',
        'controller' => 'App\\Http\\Controllers\\Events\\MainController@SearchOpenUpcomingEventsbyOtherUsers',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/events',
        'where' => 
        array (
        ),
        'as' => 'generated::8gl6L6BPO5xHBg9d',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::rvIHYSjSI7vdXQgU' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/events/SearchPastEvents',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\Events\\MainController@SearchPastEvents',
        'controller' => 'App\\Http\\Controllers\\Events\\MainController@SearchPastEvents',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/events',
        'where' => 
        array (
        ),
        'as' => 'generated::rvIHYSjSI7vdXQgU',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::zEIosM9C5MMOMIC7' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/events',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\Events\\MainController@store',
        'controller' => 'App\\Http\\Controllers\\Events\\MainController@store',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/events',
        'where' => 
        array (
        ),
        'as' => 'generated::zEIosM9C5MMOMIC7',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::mGgm3fifvf6NH1wb' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/events/invite',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\Events\\MainController@invite',
        'controller' => 'App\\Http\\Controllers\\Events\\MainController@invite',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/events',
        'where' => 
        array (
        ),
        'as' => 'generated::mGgm3fifvf6NH1wb',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ycbAD1kvgnNOg3tC' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/events/invite_multiple',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\Events\\MainController@invite_multiple',
        'controller' => 'App\\Http\\Controllers\\Events\\MainController@invite_multiple',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/events',
        'where' => 
        array (
        ),
        'as' => 'generated::ycbAD1kvgnNOg3tC',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::flkgDViz3u2udNVC' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/events/invites',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\Events\\MainController@invites',
        'controller' => 'App\\Http\\Controllers\\Events\\MainController@invites',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/events',
        'where' => 
        array (
        ),
        'as' => 'generated::flkgDViz3u2udNVC',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::IPn9lMSsSilDgh3v' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/events/SearchInvites',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\Events\\MainController@SearchInvites',
        'controller' => 'App\\Http\\Controllers\\Events\\MainController@SearchInvites',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/events',
        'where' => 
        array (
        ),
        'as' => 'generated::IPn9lMSsSilDgh3v',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::mImR9SwX1ZRoGvtS' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/events/invites/upcoming',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\Events\\MainController@upcominginvites',
        'controller' => 'App\\Http\\Controllers\\Events\\MainController@upcominginvites',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/events',
        'where' => 
        array (
        ),
        'as' => 'generated::mImR9SwX1ZRoGvtS',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::IwTMfnS8UlTJeJYi' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/events/invites/past',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\Events\\MainController@pastinvites',
        'controller' => 'App\\Http\\Controllers\\Events\\MainController@pastinvites',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/events',
        'where' => 
        array (
        ),
        'as' => 'generated::IwTMfnS8UlTJeJYi',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::vex6kUa9alk9EgAd' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/events/invites/accepted',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\Events\\MainController@acceptedinvites',
        'controller' => 'App\\Http\\Controllers\\Events\\MainController@acceptedinvites',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/events',
        'where' => 
        array (
        ),
        'as' => 'generated::vex6kUa9alk9EgAd',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::rT2gTGiODywlz0rT' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/events/invites/declined',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\Events\\MainController@declinedinvites',
        'controller' => 'App\\Http\\Controllers\\Events\\MainController@declinedinvites',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/events',
        'where' => 
        array (
        ),
        'as' => 'generated::rT2gTGiODywlz0rT',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::2bgtrCx0PQi1u3pt' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/events/invites/checked_in',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\Events\\MainController@checked_ininvites',
        'controller' => 'App\\Http\\Controllers\\Events\\MainController@checked_ininvites',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/events',
        'where' => 
        array (
        ),
        'as' => 'generated::2bgtrCx0PQi1u3pt',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::4rXjZFrlMWFtQLth' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/events/tickets/purchased',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\Events\\MainController@purchasedtickets',
        'controller' => 'App\\Http\\Controllers\\Events\\MainController@purchasedtickets',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/events',
        'where' => 
        array (
        ),
        'as' => 'generated::4rXjZFrlMWFtQLth',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::pandA1pu6qo2wwmG' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/events/all',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\Events\\MainController@allMyEvents',
        'controller' => 'App\\Http\\Controllers\\Events\\MainController@allMyEvents',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/events',
        'where' => 
        array (
        ),
        'as' => 'generated::pandA1pu6qo2wwmG',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::uOnbMxDH6tSTZiTV' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'api/events/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\Events\\MainController@update',
        'controller' => 'App\\Http\\Controllers\\Events\\MainController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/events',
        'where' => 
        array (
        ),
        'as' => 'generated::uOnbMxDH6tSTZiTV',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::wsLvXBqlvw1OvEh5' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/events/mine',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\Events\\MainController@userEvents',
        'controller' => 'App\\Http\\Controllers\\Events\\MainController@userEvents',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/events',
        'where' => 
        array (
        ),
        'as' => 'generated::wsLvXBqlvw1OvEh5',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::zl4mSDCYoGAXtNQv' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/events/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\Events\\MainController@show',
        'controller' => 'App\\Http\\Controllers\\Events\\MainController@show',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/events',
        'where' => 
        array (
        ),
        'as' => 'generated::zl4mSDCYoGAXtNQv',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::HsjuGHXvWWLiTT1j' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/events/getFullDetails/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\Events\\MainController@showFullDetails',
        'controller' => 'App\\Http\\Controllers\\Events\\MainController@showFullDetails',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/events',
        'where' => 
        array (
        ),
        'as' => 'generated::HsjuGHXvWWLiTT1j',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::vjY6zjreaw8jUUqH' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/events/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\Events\\MainController@destroy',
        'controller' => 'App\\Http\\Controllers\\Events\\MainController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/events',
        'where' => 
        array (
        ),
        'as' => 'generated::vjY6zjreaw8jUUqH',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::rxQnk27wI2UpadoI' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/events/close/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\Events\\MainController@closeEvent',
        'controller' => 'App\\Http\\Controllers\\Events\\MainController@closeEvent',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/events',
        'where' => 
        array (
        ),
        'as' => 'generated::rxQnk27wI2UpadoI',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::yJpRrpk6M6HnVYXK' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/events/{id}/requests',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\Events\\MainController@eventRequests',
        'controller' => 'App\\Http\\Controllers\\Events\\MainController@eventRequests',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/events',
        'where' => 
        array (
        ),
        'as' => 'generated::yJpRrpk6M6HnVYXK',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::wQczTI6SnagioZUr' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/events/requests/{id}/{status}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\Events\\MainController@updateRequestStatus',
        'controller' => 'App\\Http\\Controllers\\Events\\MainController@updateRequestStatus',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/events',
        'where' => 
        array (
        ),
        'as' => 'generated::wQczTI6SnagioZUr',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ONyTnzCTGbZ1WM2v' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/events/{id}/share',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\Events\\MainController@shareEvent',
        'controller' => 'App\\Http\\Controllers\\Events\\MainController@shareEvent',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/events',
        'where' => 
        array (
        ),
        'as' => 'generated::ONyTnzCTGbZ1WM2v',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::WmeRdKjchAAuDbhk' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/events/export',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\Events\\MainController@exportEvents',
        'controller' => 'App\\Http\\Controllers\\Events\\MainController@exportEvents',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/events',
        'where' => 
        array (
        ),
        'as' => 'generated::WmeRdKjchAAuDbhk',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::3oQOfRQauUp44CLK' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/events/category/list',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\Events\\MainController@categories',
        'controller' => 'App\\Http\\Controllers\\Events\\MainController@categories',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/events',
        'where' => 
        array (
        ),
        'as' => 'generated::3oQOfRQauUp44CLK',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::1sz3k5uLnESc9JIu' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/admin',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\HomeController@details',
        'controller' => 'App\\Http\\Controllers\\Admin\\HomeController@details',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'api/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::1sz3k5uLnESc9JIu',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::oSYzXzAblKn5RgTK' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/admin/storeadmin',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\HomeController@storeadmin',
        'controller' => 'App\\Http\\Controllers\\Admin\\HomeController@storeadmin',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'api/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::oSYzXzAblKn5RgTK',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::bDsqiMMWMnXinlJg' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/admin/all',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\HomeController@alladmins',
        'controller' => 'App\\Http\\Controllers\\Admin\\HomeController@alladmins',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'api/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::bDsqiMMWMnXinlJg',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::kKATmaA5qlcyoM65' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/admin/users/{status?}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\UserController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\UserController@index',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'api/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::kKATmaA5qlcyoM65',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::9G15jWKNT92cZa4J' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/admin/allLatestusers',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\UserController@getLatestUser',
        'controller' => 'App\\Http\\Controllers\\Admin\\UserController@getLatestUser',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'api/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::9G15jWKNT92cZa4J',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::CQB8fVSzgnQCLVZQ' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/admin/users/{id}/{status?}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\UserController@updateStatus',
        'controller' => 'App\\Http\\Controllers\\Admin\\UserController@updateStatus',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'api/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::CQB8fVSzgnQCLVZQ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::qRxKwmB0HTDM7dAq' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/admin/users/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\UserController@destroy',
        'controller' => 'App\\Http\\Controllers\\Admin\\UserController@destroy',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'api/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::qRxKwmB0HTDM7dAq',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::3owlHlmDTyQmQYH3' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/admin/all/members',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\OrganizationController@members',
        'controller' => 'App\\Http\\Controllers\\Admin\\OrganizationController@members',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'api/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::3owlHlmDTyQmQYH3',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::AbMiD9z8vmhp9dE8' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/admin/all/templates',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\OrganizationController@templates',
        'controller' => 'App\\Http\\Controllers\\Admin\\OrganizationController@templates',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'api/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::AbMiD9z8vmhp9dE8',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::jTEkeLHbIvZevO14' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/admin/all/idcards',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\OrganizationController@idcards',
        'controller' => 'App\\Http\\Controllers\\Admin\\OrganizationController@idcards',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'api/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::jTEkeLHbIvZevO14',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::3Jt33D8ZEpoE07I8' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/admin/organizations/{status?}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\OrganizationController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\OrganizationController@index',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'api/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::3Jt33D8ZEpoE07I8',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::zhq0CSAjrQ3wbuHi' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/admin/organizations/{id}/{status?}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\OrganizationController@updateStatus',
        'controller' => 'App\\Http\\Controllers\\Admin\\OrganizationController@updateStatus',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'api/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::zhq0CSAjrQ3wbuHi',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        'status' => '([0-1])',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::CZ17wGDEKg6N3gwB' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/admin/events',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\EventController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\EventController@index',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'api/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::CZ17wGDEKg6N3gwB',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Ds33NiNxVeGiCsn6' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/admin/events/category/store',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\EventController@store_category',
        'controller' => 'App\\Http\\Controllers\\Admin\\EventController@store_category',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'api/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::Ds33NiNxVeGiCsn6',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::SvLjRla7JqzaBO2L' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/admin/events/category/all',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\EventController@admin_all_category',
        'controller' => 'App\\Http\\Controllers\\Admin\\EventController@admin_all_category',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'api/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::SvLjRla7JqzaBO2L',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::7GfM2f6x1zVTlPaP' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'api/admin/events/category/update/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\EventController@admin_update_category',
        'controller' => 'App\\Http\\Controllers\\Admin\\EventController@admin_update_category',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'api/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::7GfM2f6x1zVTlPaP',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ZcLmdZrpJPJsQMcu' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/admin/events/category/destroy/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\EventController@admin_delete_category',
        'controller' => 'App\\Http\\Controllers\\Admin\\EventController@admin_delete_category',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'api/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::ZcLmdZrpJPJsQMcu',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::yJqqAxKDP4zmmuWE' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/admin/payments/tickets',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\PaymentController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\PaymentController@index',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'api/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::yJqqAxKDP4zmmuWE',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::SbkSW0f1gekBfZWs' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/admin/payments/subscriptions',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\PaymentController@subscriptions',
        'controller' => 'App\\Http\\Controllers\\Admin\\PaymentController@subscriptions',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'api/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::SbkSW0f1gekBfZWs',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ghlpeZJEOSSYeAMm' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/admin/all/verifiers',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
          3 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\OrganizationController@verifiers',
        'controller' => 'App\\Http\\Controllers\\Admin\\OrganizationController@verifiers',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => 'api/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::ghlpeZJEOSSYeAMm',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::K3CBUjLHzkPgNZsM' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/test/url',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
        ),
        'uses' => 'App\\Http\\Controllers\\TestController@signedUrl',
        'controller' => 'App\\Http\\Controllers\\TestController@signedUrl',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/test',
        'where' => 
        array (
        ),
        'as' => 'generated::K3CBUjLHzkPgNZsM',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::EBkhsYBbyuFZUdOj' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/test/notify',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
        ),
        'uses' => 'App\\Http\\Controllers\\TestController@notify',
        'controller' => 'App\\Http\\Controllers\\TestController@notify',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/test',
        'where' => 
        array (
        ),
        'as' => 'generated::EBkhsYBbyuFZUdOj',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::bLRFRMpvXY0oSW68' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/test/role',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
        ),
        'uses' => 'App\\Http\\Controllers\\TestController@roles',
        'controller' => 'App\\Http\\Controllers\\TestController@roles',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/test',
        'where' => 
        array (
        ),
        'as' => 'generated::bLRFRMpvXY0oSW68',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::XLP4KOifGE0ec8Cp' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/test/resource',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
        ),
        'uses' => 'App\\Http\\Controllers\\TestController@resource',
        'controller' => 'App\\Http\\Controllers\\TestController@resource',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/test',
        'where' => 
        array (
        ),
        'as' => 'generated::XLP4KOifGE0ec8Cp',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::ogoxYkIBQexwivpZ' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/test/util',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
        ),
        'uses' => 'App\\Http\\Controllers\\TestController@util',
        'controller' => 'App\\Http\\Controllers\\TestController@util',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/test',
        'where' => 
        array (
        ),
        'as' => 'generated::ogoxYkIBQexwivpZ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::PMPbMZeKbxT3Ocis' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/test/user',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'cors',
          2 => 'json.response',
        ),
        'uses' => 'App\\Http\\Controllers\\TestController@getuser',
        'controller' => 'App\\Http\\Controllers\\TestController@getuser',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/test',
        'where' => 
        array (
        ),
        'as' => 'generated::PMPbMZeKbxT3Ocis',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'login' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\LoginController@showLoginForm',
        'controller' => 'App\\Http\\Controllers\\Auth\\LoginController@showLoginForm',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'login',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::UMlpmYDjtmOSvhx7' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\LoginController@login',
        'controller' => 'App\\Http\\Controllers\\Auth\\LoginController@login',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::UMlpmYDjtmOSvhx7',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'logout' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'logout',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\LoginController@logout',
        'controller' => 'App\\Http\\Controllers\\Auth\\LoginController@logout',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'logout',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'register' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'register',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\RegisterController@showRegistrationForm',
        'controller' => 'App\\Http\\Controllers\\Auth\\RegisterController@showRegistrationForm',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'register',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::3n6TgurJ8f6VDiDN' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'register',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\RegisterController@register',
        'controller' => 'App\\Http\\Controllers\\Auth\\RegisterController@register',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::3n6TgurJ8f6VDiDN',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'password.request' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'password/reset',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\ForgotPasswordController@showLinkRequestForm',
        'controller' => 'App\\Http\\Controllers\\Auth\\ForgotPasswordController@showLinkRequestForm',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'password.request',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'password.email' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'password/email',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\ForgotPasswordController@sendResetLinkEmail',
        'controller' => 'App\\Http\\Controllers\\Auth\\ForgotPasswordController@sendResetLinkEmail',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'password.email',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'password.reset' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'password/reset/{token}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\ResetPasswordController@showResetForm',
        'controller' => 'App\\Http\\Controllers\\Auth\\ResetPasswordController@showResetForm',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'password.reset',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'password.update' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'password/reset',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\ResetPasswordController@reset',
        'controller' => 'App\\Http\\Controllers\\Auth\\ResetPasswordController@reset',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'password.update',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'password.confirm' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'password/confirm',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\ConfirmPasswordController@showConfirmForm',
        'controller' => 'App\\Http\\Controllers\\Auth\\ConfirmPasswordController@showConfirmForm',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'password.confirm',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::FunO6Tg1Ja9HeDna' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'password/confirm',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\ConfirmPasswordController@confirm',
        'controller' => 'App\\Http\\Controllers\\Auth\\ConfirmPasswordController@confirm',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::FunO6Tg1Ja9HeDna',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::DmHEAn9e7VUthFtp' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'register/account-type',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\RegisterController@accountTypeView',
        'controller' => 'App\\Http\\Controllers\\Auth\\RegisterController@accountTypeView',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::DmHEAn9e7VUthFtp',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::svfLM10CJCjhshrs' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'register/organization',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\RegisterController@organizationView',
        'controller' => 'App\\Http\\Controllers\\Auth\\RegisterController@organizationView',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::svfLM10CJCjhshrs',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::0FoesFlmN88ZkGt9' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'register/organization',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\RegisterController@createOrganization',
        'controller' => 'App\\Http\\Controllers\\Auth\\RegisterController@createOrganization',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::0FoesFlmN88ZkGt9',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'email.verify' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'email/verify',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\RegisterController@verifyEmail',
        'controller' => 'App\\Http\\Controllers\\Auth\\RegisterController@verifyEmail',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'email.verify',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::aoOtXy4Opk58LQzO' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => '/',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\General\\PagesController@index',
        'controller' => 'App\\Http\\Controllers\\General\\PagesController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::aoOtXy4Opk58LQzO',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::9ZqDeMEfGzeQTHUZ' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'faq',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\General\\PagesController@faq',
        'controller' => 'App\\Http\\Controllers\\General\\PagesController@faq',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::9ZqDeMEfGzeQTHUZ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::780VuuOIqqf2OnNb' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'about',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\General\\PagesController@about',
        'controller' => 'App\\Http\\Controllers\\General\\PagesController@about',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::780VuuOIqqf2OnNb',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::qFeQFdC0bfMumVed' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'pricing',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\General\\PagesController@pricing',
        'controller' => 'App\\Http\\Controllers\\General\\PagesController@pricing',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::qFeQFdC0bfMumVed',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::KXzfLFjmxXinv8tU' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'contact',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\General\\PagesController@contact',
        'controller' => 'App\\Http\\Controllers\\General\\PagesController@contact',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::KXzfLFjmxXinv8tU',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::hIkmK9KzwT36arls' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'account-created',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\General\\PagesController@created',
        'controller' => 'App\\Http\\Controllers\\General\\PagesController@created',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::hIkmK9KzwT36arls',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::cYAb6cvb9ZBTgXIO' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'password-reset-success',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\General\\PagesController@created_password_success',
        'controller' => 'App\\Http\\Controllers\\General\\PagesController@created_password_success',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::cYAb6cvb9ZBTgXIO',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::QmPiPdX98ysxdDvJ' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'payments/verify',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\General\\PagesController@paymentResponse',
        'controller' => 'App\\Http\\Controllers\\General\\PagesController@paymentResponse',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::QmPiPdX98ysxdDvJ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::MyQ2qTTc7kIxQHwT' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'payments/verify/subscription',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\General\\PagesController@SubscriptionPaymentResponse',
        'controller' => 'App\\Http\\Controllers\\General\\PagesController@SubscriptionPaymentResponse',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::MyQ2qTTc7kIxQHwT',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'home' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'home',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\HomeController@index',
        'controller' => 'App\\Http\\Controllers\\HomeController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'home',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::YJ6wQh7rXIXSAOUH' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'organization',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Organization\\Dashboard@index',
        'controller' => 'App\\Http\\Controllers\\Organization\\Dashboard@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/organization',
        'where' => 
        array (
        ),
        'as' => 'generated::YJ6wQh7rXIXSAOUH',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::cGxAEmGBAE5t982z' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'organization/{path}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Organization\\Dashboard@index',
        'controller' => 'App\\Http\\Controllers\\Organization\\Dashboard@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/organization',
        'where' => 
        array (
        ),
        'as' => 'generated::cGxAEmGBAE5t982z',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        '/path' => '([A-Z\\d-\\/_.]+)?',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::fDRg48EVdpkYYOsJ' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'organization/{path}/{path2}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Organization\\Dashboard@index',
        'controller' => 'App\\Http\\Controllers\\Organization\\Dashboard@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/organization',
        'where' => 
        array (
        ),
        'as' => 'generated::fDRg48EVdpkYYOsJ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        '/path' => '([A-Z\\d-\\/_.]+)?',
        '/path2' => '([A-Z\\d-\\/_.]+)?',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::zi3q6OPuJWVjtFno' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'organization/{path}/{path2}/{path3}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Organization\\Dashboard@index',
        'controller' => 'App\\Http\\Controllers\\Organization\\Dashboard@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/organization',
        'where' => 
        array (
        ),
        'as' => 'generated::zi3q6OPuJWVjtFno',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        '/path' => '([A-Z\\d-\\/_.]+)?',
        '/path2' => '([A-Z\\d-\\/_.]+)?',
        '/path3' => '([A-Z\\d-\\/_.]+)?',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::Gpq0Kme6LF16S6tg' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'individual',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Individual\\DashboardController@index',
        'controller' => 'App\\Http\\Controllers\\Individual\\DashboardController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/individual',
        'where' => 
        array (
        ),
        'as' => 'generated::Gpq0Kme6LF16S6tg',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::pRmOrojgD3BWOefr' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'individual/{path}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Individual\\DashboardController@index',
        'controller' => 'App\\Http\\Controllers\\Individual\\DashboardController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/individual',
        'where' => 
        array (
        ),
        'as' => 'generated::pRmOrojgD3BWOefr',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        '/path' => '([A-Z\\d-\\/_.]+)?',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::BCKCNddCQGDcpGXL' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'individual/{path}/{path2}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Individual\\DashboardController@index',
        'controller' => 'App\\Http\\Controllers\\Individual\\DashboardController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/individual',
        'where' => 
        array (
        ),
        'as' => 'generated::BCKCNddCQGDcpGXL',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        '/path' => '([A-Z\\d-\\/_.]+)?',
        '/path2' => '([A-Z\\d-\\/_.]+)?',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::DwdjoGFKZKcZj44p' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'individual/{path}/{path2}/{path3}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\Individual\\DashboardController@index',
        'controller' => 'App\\Http\\Controllers\\Individual\\DashboardController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/individual',
        'where' => 
        array (
        ),
        'as' => 'generated::DwdjoGFKZKcZj44p',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        '/path' => '([A-Z\\d-\\/_.]+)?',
        '/path2' => '([A-Z\\d-\\/_.]+)?',
        '/path3' => '([A-Z\\d-\\/_.]+)?',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::9mKQXhnpJGveuUL3' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'ticket-plans',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\General\\PagesController@ticketPlan',
        'controller' => 'App\\Http\\Controllers\\General\\PagesController@ticketPlan',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::9mKQXhnpJGveuUL3',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::CYFdaAaHFYzBm0bc' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'create-ticket',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => 'App\\Http\\Controllers\\General\\PagesController@ticket',
        'controller' => 'App\\Http\\Controllers\\General\\PagesController@ticket',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '',
        'where' => 
        array (
        ),
        'as' => 'generated::CYFdaAaHFYzBm0bc',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::rnrWyO6F890IjAhQ' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\LoginController@adminView',
        'controller' => 'App\\Http\\Controllers\\Auth\\LoginController@adminView',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::rnrWyO6F890IjAhQ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::uPRw4zijj3sC4jDb' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'admin/login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\Auth\\LoginController@adminLogin',
        'controller' => 'App\\Http\\Controllers\\Auth\\LoginController@adminLogin',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::uPRw4zijj3sC4jDb',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::2qD7l2aSgv1MNUcu' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\HomeController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\HomeController@index',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::2qD7l2aSgv1MNUcu',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::dyUhD6v0rZekIrPy' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/{path}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\HomeController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\HomeController@index',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::dyUhD6v0rZekIrPy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        '/path' => '([A-Z\\d-\\/_.]+)?',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::VIYpliiAvPPb3Aqc' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/{path}/{path2}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\HomeController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\HomeController@index',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::VIYpliiAvPPb3Aqc',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        '/path' => '([A-Z\\d-\\/_.]+)?',
        '/path2' => '([A-Z\\d-\\/_.]+)?',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::oy1ATOE0dgJxmIsP' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'admin/{path}/{path2}/{path3}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth:admin',
        ),
        'uses' => 'App\\Http\\Controllers\\Admin\\HomeController@index',
        'controller' => 'App\\Http\\Controllers\\Admin\\HomeController@index',
        'namespace' => 'App\\Http\\Controllers\\Admin',
        'prefix' => '/admin',
        'where' => 
        array (
        ),
        'as' => 'generated::oy1ATOE0dgJxmIsP',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
        '/path' => '([A-Z\\d-\\/_.]+)?',
        '/path2' => '([A-Z\\d-\\/_.]+)?',
        '/path3' => '([A-Z\\d-\\/_.]+)?',
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::156hsW3knj0ca040' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'test/url',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\TestController@signedUrl',
        'controller' => 'App\\Http\\Controllers\\TestController@signedUrl',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/test',
        'where' => 
        array (
        ),
        'as' => 'generated::156hsW3knj0ca040',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::WvK2tbrpIgVuiMTX' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'test/email',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\TestController@email',
        'controller' => 'App\\Http\\Controllers\\TestController@email',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/test',
        'where' => 
        array (
        ),
        'as' => 'generated::WvK2tbrpIgVuiMTX',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::aR453n0HseWyvBGh' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'test/notify',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\TestController@notify',
        'controller' => 'App\\Http\\Controllers\\TestController@notify',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/test',
        'where' => 
        array (
        ),
        'as' => 'generated::aR453n0HseWyvBGh',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::eJpMdRPf34FAwjem' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'test/unique',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\TestController@unique',
        'controller' => 'App\\Http\\Controllers\\TestController@unique',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/test',
        'where' => 
        array (
        ),
        'as' => 'generated::eJpMdRPf34FAwjem',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
    'generated::NWXB6f4U71rWIv35' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'test/user',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
        ),
        'uses' => 'App\\Http\\Controllers\\TestController@getuser',
        'controller' => 'App\\Http\\Controllers\\TestController@getuser',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => '/test',
        'where' => 
        array (
        ),
        'as' => 'generated::NWXB6f4U71rWIv35',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
      'withTrashed' => false,
    ),
  ),
)
);

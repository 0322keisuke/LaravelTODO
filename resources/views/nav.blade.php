<nav class="navbar navbar-expand navbar-dark blue-gradient">

  <a class="navbar-brand" href="/"><i class="far fa-list-alt"></i> TODO</a>
  <div class="my-navbar-control  ml-auto text-white">
    @guest
    <a class="my-navbar-item text-white" href="{{route('login')}}"> ログイン </a>
    |
    <a class="my-navbar-item text-white" href="{{route('register')}}">会員登録</a>
    @endguest

    @auth
    <span class="my-navbar-item">ようこそ,{{ Auth::user()->name }}さん</span>
    |
    <a href="#" id="logout" class="my-navbar-item text-white">ログアウト</a>
    <form id="logout-form" action="{{route('logout')}}" method="POST" style="display:none;">
      @csrf
    </form>
    @endauth
  </div>
</nav>
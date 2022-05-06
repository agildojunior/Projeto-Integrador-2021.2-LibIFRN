<style> 
    .v-menu li{
        list-style-type: none;
    }
    .v-menu ul{
        background-color: #fff;
    }
    .v-menu li h3{
        display: block;
        color: #fff;
        background-color: #369831;
        padding: 1px 20px;
        text-decoration: none;
        font-weight: bold;
    }
    .v-menu li a{
        display: block;
        color: #369831;
        padding: 12px 20px;
        text-decoration: none;
        font-weight: bold;
    }
    .v-menu li a:hover{
        color: #fff;
        background-color: #369831;
    }

    .v-menu li.active{
        background-color: #369831;
    }

    .v-menu li a.active{
        color: #fff;
    }

    .listespace{
        height: 43vh;
    }

</style>

<div class="span3" >
    <div class="v-menu" >
        <ul class="unstyled">

            <li class="list"><h3>Menu</h3></li>
            @can('is_admin')
            <li class="list {{ request()->is('home') ? 'active' : ''}}"><a class="list2 {{ request()->is('home') ? 'active' : ''}}" href="{{ URL::route('home') }}">Home</a></li>
            <li class="list {{ request()->is('alluser') ? 'active' : ''}}"><a class="list2 {{ request()->is('alluser') ? 'active' : ''}}" href="{{ URL::route('alluser') }}">Lista de usuarios</a></li>
            <li class="list {{ request()->is('allemprestimo') ? 'active' : ''}}"><a class="list2 {{ request()->is('allemprestimo') ? 'active' : ''}}" href="{{ URL::route('allemprestimo') }}">Pedidos de emprestimo</a></li>
            <li class="list {{ request()->is('meusemprestimos') ? 'active' : ''}}"><a class="list2 {{ request()->is('meusemprestimos') ? 'active' : ''}}" href="{{ URL::route('meusemprestimos') }}">Meus emprestimos</a></li>
            <li class="list {{ request()->is('renovacaolist') ? 'active' : ''}}"><a class="list2 {{ request()->is('renovacaolist') ? 'active' : ''}}" href="{{ URL::route('renovacaolist') }}">Pedidos de renovação</a></li>
            <li class="list {{ request()->is('devolucaolist') ? 'active' : ''}}"><a class="list2 {{ request()->is('devolucaolist') ? 'active' : ''}}" href="{{ URL::route('devolucaolist') }}">Pedidos de devolucao</a></li>
            <li class="list {{ request()->is('todosemprestimos') ? 'active' : ''}}"><a class="list2 {{ request()->is('todosemprestimos') ? 'active' : ''}}" href="{{ URL::route('todosemprestimos') }}">Todos os emprestimos</a></li>
            <li class="list {{ request()->is('allbook') ? 'active' : ''}}"><a class="list2 {{ request()->is('allbook') ? 'active' : ''}}" href="{{ URL::route('allbook') }}">Livros da biblioteca</a></li>
            <li class="list {{ request()->is('book-category') ? 'active' : ''}}"><a class="list2 {{ request()->is('book-category') ? 'active' : ''}}" href="{{ URL::route('book-category') }}">Adicionar categoria de livro</a></li>
            <li class="list {{ request()->is('add-books') ? 'active' : ''}}"><a class="list2 {{ request()->is('add-books') ? 'active' : ''}}" href="{{ URL::route('add-books') }}">Adicionar livro</a></li>
            <li class="list {{ request()->is('account-sign-out') ? 'active' : ''}}"><a class="list2 {{ request()->is('account-sign-out') ? 'active' : ''}}" href="{{ URL::route('account-sign-out') }}"><i class="menu-icon icon-wrench"></i>Logout </a></li>
            @endcan
            
            @if(Auth::user()->profile=='user')
            <li class="list {{ request()->is('home') ? 'active' : ''}}"><a class="list2 {{ request()->is('home') ? 'active' : ''}}" href="{{ URL::route('home') }}">Home</a></li>
            <li class="list {{ request()->is('meusemprestimos') ? 'active' : ''}}"><a class="list2 {{ request()->is('meusemprestimos') ? 'active' : ''}}" href="{{ URL::route('meusemprestimos') }}">Meus emprestimos</a></li>
            <li class="list {{ request()->is('allbook') ? 'active' : ''}}"><a class="list2 {{ request()->is('allbook') ? 'active' : ''}}" href="{{ URL::route('allbook') }}">Livros da biblioteca</a></li>
            <li class="listespace"> </li>
            <li class="list {{ request()->is('account-sign-out') ? 'active' : ''}}"><a class="list2 {{ request()->is('account-sign-out') ? 'active' : ''}}" href="{{ URL::route('account-sign-out') }}"><i class="menu-icon icon-wrench"></i>Logout </a></li>
            @endif
        </ul>
    </div>
</div>
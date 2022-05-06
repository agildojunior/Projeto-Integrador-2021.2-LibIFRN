@extends('account.index')

@section('content')

@include('account.style')

<div class="content">
        <div class="content">
            <div class="module">
                <div class="module-body">
                    <form class="form-horizontal row-fluid" id="findbookform">
                        <div class="control-group">
                            <label class="control-label">Nome do Autor /<br>Nome do Livro</label>
                            <div class="controls">
                                <div class="span9">
                                    <textarea class="span12" rows="2"></textarea>
                                </div>
                                <div class="span3">
                                    <a class="btn homepage-form-submit" style="background-color:  #369831; color:#fff"><i class="icon-search"></i> Procurar</a>
                                </div>
                            </div>
                        </div>
                    </form>
                    <hr>
                    <table class="table table-striped table-bordered table-condensed" style="display: none;">
                        <thead>
                            <tr>
                                <th>Book ID</th>
                                <th>Título do livro</th>
                                <th>Autor</th>
                                <th>Descrição</th>
                                <th>Categoria</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody id="book-results"></tbody>
                    </table>
                </div>
            </div>
        </div>
    <input type="hidden" name="" id="branches_list" value="{{ json_encode($branch_list) }}">
    <input type="hidden" name="" id="student_categories_list" value="{{ json_encode($student_categories_list) }}">
    <input type="hidden" name="" id="categories_list" value="{{ json_encode($categories_list) }}">
    <input type="hidden" id="_token"  data-form-field="token"  value="{{ csrf_token() }}">

</div>
@stop


@section('custom_bottom_script')
<script type="text/javascript">
        var branches_list = $('#branches_list').val(),
        student_categories_list = $('#student_categories_list').val(),
        categories_list = $('#categories_list').val(),
        _token = $('#_token').val();
</script>

<script type="text/javascript" src="{{asset('static/custom/js/script.mainpage.js') }}"></script>


<script type="text/template" id="search_book">
    @include('underscore.search_book')
</script>
<script type="text/template" id="search_issue">
    @include('underscore.search_issue')
</script>
<script type="text/template" id="search_student">
    @include('underscore.search_student')
</script>
<script type="text/template" id="approvalstudents_show">
    @include('underscore.approvalstudents_show')
</script>
@stop
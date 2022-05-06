@extends('layout.index')

@section('custom_top_script')
@stop

@section('content')
<div class="content">
    <div class="module">
        <div class="module-head">
            <h3>Alunos aguardando aprovação do empréstimo</h3>
        </div>
        <div class="module-body">
            
            <table class="table table-striped table-bordered table-condensed">
                <thead>
                    <tr>
                        <th>ID Empréstimo</th>
                        <th>ID Livro</th>
                        <th>Livro</th>
                        <th>Usuário</th>
                        <th>Matrícula</th>
                        <th>Aprovar</th>
                    </tr>

                    
                <tbody id="approval-table">
                    <tr class="text-center">
                        <td colspan="99"><i class="icon-spinner icon-spin"></i></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>



@stop

@section('custom_bottom_script')
<script type="text/javascript">
    var branches_list = $('#branches_list').val(),
        categories_list = $('#student_categories_list').val(),
        _token = $('#_token').val();
</script>
<script type="text/javascript" src="{{asset('static/custom/js/script.student-approval.js') }}"></script>
<script type="text/template" id="approvalstudents_show">
    @include('underscore.approvalstudents_show')
</script>
@stop
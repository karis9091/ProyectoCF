<div>
    {{-- Care about people's approval and you will be their prisoner. --}}
    <div class="card">
        <div class="card-header">
        <h3 class="card-title">Bordered Table</h3>
        </div>

        <div class="card-body">
        <table class="table table-bordered">
        <thead>

        <th style="width: 10px">#</th>
        <th>Task</th>
        <th>Progress</th>
        <th style="width: 40px">Label</th>

        </thead>
        <tbody>
            @foreach ($usuarios as $usuario )
            <td>{{$usuario['id']}}</td>
            <td>{{$usuario['usuario']}}</td>
            <td>
                {{$usuario['email']}}
            </td>
            <td><span class="badge bg-success">90%</span></td>

            @endforeach


        </div>
        </td>
        <td><span class="badge bg-danger">55%</span></td>


        <td>2.</td>
        <td>Clean database</td>
        <td>
        <div class="progress progress-xs">
        <div class="progress-bar bg-warning" style="width: 70%"></div>
        </div>
        </td>
        <td><span class="badge bg-warning">70%</span></td>


        <td>3.</td>
        <td>Cron job running</td>
        <td>
        <div class="progress progress-xs progress-striped active">
        <div class="progress-bar bg-primary" style="width: 30%"></div>
        </div>
        </td>
        <td><span class="badge bg-primary">30%</span></td>

        <td>4.</td>
        <td>Fix and squish bugs</td>
        <td>
        <div class="progress progress-xs progress-striped active">
        <div class="progress-bar bg-success" style="width: 90%"></div>
        </div>
        </td>
        <td><span class="badge bg-success">90%</span></td>

        </tbody>
        </table>
        </div>

        <div class="card-footer clearfix">
        <ul class="pagination pagination-sm m-0 float-right">
        <li class="page-item"><a class="page-link" href="#">«</a></li>
        <li class="page-item"><a class="page-link" href="#">1</a></li>
        <li class="page-item"><a class="page-link" href="#">2</a></li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
        <li class="page-item"><a class="page-link" href="#">»</a></li>
        </ul>
        </div>
        </div>
</div>

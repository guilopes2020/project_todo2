<x-layout title="Página Inicial">
    <section class="graph">
        <div class="graph_header">
            <h2>Progresso do Dia</h2>
            <div class="graph-header-line"></div>
            <div class="graph-header-date">
                <img src="/assets/images/icon-prev.png" alt="">
                    13 de Dez
                <img src="/assets/images/icon-next.png" alt="">
            </div>
        </div>
        <div class="graph_header_subtitle">
            Tarefas: <b>3/6</b>
        </div>
        <div class="graph-placeholder">
        </div>
        <div class="tasks-left-footer">
            <img src="/assets/images/icon-info.png" alt="">
            Restam 3 tarefas a serem realizadas
        </div>
    </section>
    <section class="list">
        <div class="list-header">
            <select class="list-header-select">
                <option value="1">Todas as tarefas</option>
            </select>
        </div>
        @foreach ($tasks as $task )
            <div class="task-list">
                <div class="task">
                    <div class="title">
                        <input type="checkbox" />
                        <h4>{{$task->title}}</h4>
                    </div>
                    <div class="priority">
                        <div class="sphere"></div>
                        <h6>{{$task->description}}</h6>
                    </div>
                    <div class="actions">
                        <a href="#">
                            <img src="/assets/images/icon-edit.png" alt="Editar" title="Editar">
                        </a>
                        <a href="#">
                            <img src="/assets/images/icon-delete.png" alt="Excluir" title="Excluir">
                        </a>
                    </div>
                </div>
            </div>
        @endforeach
    </section>
</x-layout>
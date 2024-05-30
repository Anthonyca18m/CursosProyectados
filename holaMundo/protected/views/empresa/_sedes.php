<!-- SEDES -->
<div class="modal" id="modal-sedes" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Lista de Sedes</h5>
                <button class="btn-close" aria-label="Close" @click="cerrar('#modal-sedes')"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-12 text-end">
                        <button class="btn btn-sm btn-primary">Registrar Nuevo</button>
                    </div>
                    <div class="col-lg-12">
                        <div class="table-responsive">
                            <table class="table table-hover tbl-dt-sede">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>SEDE</th>
                                        <th>DIRECCION</th>
                                        <th>ACCIONES</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr v-for="d,i in sedes" :key="i">
                                        <td>{{ d.id }}</td>
                                        <td>{{ d.nombre }}</td>
                                        <td>{{ d.direccion }}</td>
                                        <td class="text-center">
                                            <button class="btn btn-sm btn-primary" @click="sedeEditar(d)"><i class="fas fa-edit"></i></button>
                                            <button class="btn btn-sm btn-danger" @click="sedeEliminar(d.id)"><i class="fas fa-trash"></i></button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
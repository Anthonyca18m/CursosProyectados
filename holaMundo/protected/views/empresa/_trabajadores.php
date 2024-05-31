<!-- SEDES -->
<div class="modal" id="modal-tjs" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Lista de Trabajadores</h5>
                <button class="btn-close" aria-label="Close" @click="cerrar('#modal-tjs')"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div v-if="!sedeForm" class="col-lg-12 text-end">
                        <button class="btn btn-sm btn-primary" @click="formSede">Nueva Trabajador</button>
                    </div>
                    <div v-if="sedeForm" class="col-lg-12 my-3">
                        <div class="row">
                            <div class="col-lg-4">
                                <label>Nombre</label>
                                <input v-model.trim="sede.nombre" type="text" :class="(errores.nombre) ? 'form-control is-invalid':'form-control'">
                                <small v-if="errores.nombre" class="text-danger">{{ errores.nombre[0] }}</small>
                            </div>
                            <div class="col-lg-4">
                                <label>Dirección</label>
                                <input v-model.trim="sede.direccion" type="text" :class="(errores.direccion) ? 'form-control is-invalid':'form-control'">
                                <small v-if="errores.direccion" class="text-danger">{{ errores.direccion[0] }}</small>
                            </div>
                            <div class="col-lg-4" v-if="sede.id != ''">
                                <label>Estado</label>                                
                                <select v-model.trim="sede.estado" :class="(errores.nombre) ? 'form-select is-invalid':'form-select'">
                                    <option value="1">activo</option>
                                    <option value="0">inactivo</option>
                                </select>
                                <small v-if="errores.estado" class="text-danger">{{ errores.estado[0] }}</small>
                            </div>
                            <div class="col-lg-4 d-flex align-items-end">
                                <button v-if="sede.id == ''" @click="registrarSede" class="btn btn-primary mx-1">Registrar</button>
                                <button v-else class="btn btn-primary mx-1" @click="guardarSede">Guardar</button>
                                <button class="btn btn-secondary mx-1" @click="cancelarSede">Cancelar</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="table-responsive">
                            <table class="table table-hover tbl-dt-tjs">
                                <thead>
                                    <tr>
                                        <th>SEDE</th>                                        
                                        <th>NOMBRE</th>
                                        <th>CARGO</th>
                                        <th>DOCUMENTO</th>
                                        <th>ESTADO</th>
                                        <th>ACCIONES</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr v-for="d,i in trabajadores" :key="i">
                                        <td>{{ d.sede_desc }}</td>
                                        <td>{{ d.trb_nom }} {{ d.trb_ape }}</td>
                                        <td>{{ d.cargo }}</td>
                                        <td>{{ d.tipo_doc }}: {{ d.documento }}</td>
                                        <td>{{ (d.estado == 1) ? 'ACTIVO':'INACTIVO' }}</td>
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
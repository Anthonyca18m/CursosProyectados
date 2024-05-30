<div id="app" class="row mt-5 rounded border">
	<div class="card">
		<div class="card-body">
			<div class="row">
				<div class="col-lg-12 d-flex justify-content-end">
					<button class="btn btn-primary" @click="nuevo('#modal-re')">Registrar Nuevo</button>
				</div>
				<div class="col-lg-12">
					<div class="table-responsive">
						<table class="table tbl-dt">
							<thead>
								<tr>
									<th>#</th>
									<th>NOMBRE</th>
									<th>RUC</th>
									<th>ALIAS</th>
									<th>DIRECCION</th>
									<th>REFERENCIA</th>
									<th>ESTADO</th>
									<th>ACCIONES</th>
								</tr>
							</thead>
							<tbody>
								<tr v-for="(d, i) in lista" :key="i">
									<td>{{ d.id }}</td>
									<td>{{ d.nombre }}</td>
									<td>{{ d.ruc }}</td>
									<td>{{ d.alias }}</td>
									<td>{{ d.direccion }}</td>
									<td>{{ d.referencia }}</td>
									<td>
										<span v-if="d.estado == 1" class="badge bg-success">ACTIVO</span>
										<span v-else class="badge bg-danger">INACTIVO</span>
									</td>
									<td>
										<button class="btn btn-sm btn-primary" @click="editar(d)"><i class="fas fa-edit"></i></button>
										<button class="btn btn-sm btn-danger" @click="eliminar(d.id)"><i class="fas fa-trash"></i></button>
										<button class="btn btn-sm btn-primary" @click="mostrarSedes(d)"><i class="fas fa-list"></i> Sedes</button>
									</td>
								</tr>		
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>


	<!-- NUEVO -->
	<div class="modal" id="modal-re" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">{{ (form.id == '') ? 'Formulario de registro':'Editar' }}</h5>
				<button class="btn-close" aria-label="Close"  @click="cerrar('#modal-re')"></button>
			</div>
			<div class="modal-body">
				<div class="row">
					<div class="col-lg-12">
						<label>Nombre</label>
						<input v-model.trim="form.nombre" type="text" :class="(errores.nombre) ? 'form-control is-invalid':'form-control'">
						<small v-if="errores.nombre" class="text-danger">{{ errores.nombre[0] }}</small>
					</div>
					<div class="col-lg-12">
						<label>alias</label>
						<input v-model.trim="form.alias" type="text" :class="(errores.alias) ? 'form-control is-invalid':'form-control'">
						<small v-if="errores.alias" class="text-danger">{{ errores.alias[0] }}</small>
					</div>
					<div class="col-lg-12">
						<label>ruc</label>
						<input v-model.trim="form.ruc" type="text" :class="(errores.ruc) ? 'form-control is-invalid':'form-control'" maxlength="11">
						<small v-if="errores.ruc" class="text-danger">{{ errores.ruc[0] }}</small>
					</div>
					<div class="col-lg-12">
						<label>direccion</label>
						<input v-model.trim="form.direccion" type="text" :class="(errores.direccion) ? 'form-control is-invalid':'form-control'">
						<small v-if="errores.direccion" class="text-danger">{{ errores.direccion[0] }}</small>
					</div>
					<div class="col-lg-12">
						<label>referencia</label>
						<input v-model.trim="form.referencia" type="text" :class="(errores.referencia) ? 'form-control is-invalid':'form-control'">
						<small v-if="errores.referencia" class="text-danger">{{ errores.referencia[0] }}</small>
					</div>
					<div v-if="form.id != ''" class="col-lg-12">
						<label>Estado</label>
						<select v-model="form.estado" class="form-select">
							<option value="0">INACTIVO</option>
							<option value="1">ACTIVO</option>
						</select>
					</div>
				</div>
			</div>
			<div class="modal-footer text-center">
				<button v-if="form.id == ''"  @click="registrar" class="btn btn-primary">Registrar</button>
				<button v-else @click="guardar" class="btn btn-primary">Guardar cambios</button>				
			</div>
			</div>
		</div>
	</div>

	

	<?php $this->renderPartial('_sedes'); ?>
</div>

<script>
  const app = new Vue({
        el: "#app",
        data: () => ({	
			lista: [],
			form: {
				id: '',
				nombre: '',
				alias: '',
				ruc: '',
				direccion: '',
				referencia: '',
				estado: 1,
			},
			errores: [],
			
			sedes: [],

        }),
        methods: {
			obtenerDatos(){
				axios.get('empresa/listar')
					.then(({data}) => {
						this.lista = data
						this.initDt('.tbl-dt')	
					})
					.catch((err) => {
						console.log(err)
					})
					.finally(() => {
					})
			},
			nuevo(name) {
				$(name).modal('show')
			},
			cerrar(name) {
				$(name).modal('hide')
			},
			editar(data) {
				this.nuevo('#modal-re')
				this.form.id = data.id
				this.form.nombre = data.nombre
				this.form.alias = data.alias
				this.form.ruc = data.ruc
				this.form.direccion = data.direccion
				this.form.referencia = data.referencia
				this.form.estado = data.estado
			},
			eliminar(id) {
				if (confirm('¿Estas seguro de eliminar?')) {
					axios.delete(`empresa/eliminar/${id}`)
					.then(({data}) => {
						this.obtenerDatos()
					})
					.catch((err) => {
						console.log(err)
					})
					.finally(() => {
					})
				}
			},
			registrar() {
				axios.post('empresa/registrar', {model: this.form})
					.then(({data}) => {
						this.limpiarForm()
						this.cerrar('#modal-re')
						this.obtenerDatos()						
					})
					.catch((err) => {
						this.errores = (err.response.status == 422) ? err.response.data.errores : []
					})
					.finally(() => {
					})
			},
			guardar() {
				axios.post(`empresa/actualizar/${this.form.id}`, {model: this.form})
					.then(({data}) => {
						this.limpiarForm()
						this.cerrar('#modal-re')
						this.obtenerDatos()						
					})
					.catch((err) => {
						this.errores = (err.response.status == 422) ? err.response.data.errores : []
					})
					.finally(() => {
					})
			},
			limpiarForm() {
				this.form.id = ''
				this.form.nombre = ''
				this.form.alias = ''
				this.form.ruc = ''
				this.form.direccion = ''
				this.form.referencia = ''
				this.form.estado = 1
				this.modal = false
				this.errores = []
			},
			mostrarSedes(model) {
				$('#modal-sedes').modal('show')
				axios.get(`sede/listarSedes/${model.id}`)
					.then(({data}) => {
						this.sedes = data						
						this.initDt('.tbl-dt-sede')						
					})
					.catch((err) => {
						console.log(err)
					})
					.finally(() => {
					})
			},
			initDt(name) {
				$(name).DataTable().destroy()
				setTimeout(() => {
					$(name).DataTable()
				}, 200)
			},
        },
        watch: {
        },
        computed: {},
        filters: {},
        mounted() {
            this.obtenerDatos()
        },
        created() {},
    });
</script>
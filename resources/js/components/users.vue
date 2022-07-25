<style>
  .box-header {
    display: flex;
    padding: 4px;
  }
  .swal2-icon.swal2-warning {
    font-size: 20px;
  }
</style>
<template>
    <div class="container">
        <div class="row mt-5">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Users</h3>

              <div class="card-tools ml-auto">
                <button class="btn btn-success" @click="newUser">Add New User</button>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="card-body table-responsive no-padding">
              <table class="table table-hover">
                <tbody><tr>
                  <th>ID</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Phone No.</th>
                  <th>Role</th>
                  <th>Modify</th>
                </tr>
                 <!-- v-for="user in users" :key="user.id" -->
                <tr v-for="user in users.data" :key="user.id">
                  <td>{{user.id}}</td>
                  <td>{{user.name}}</td>
                  <td>{{user.email}}</td>
                  <td>{{user.phone}}</td>
                  <td><span class="label label-success">{{user.role | upText}}</span></td>
                  <td>
                      <button class="btn btn-primary btn-sm" @click="editUser(user)">
                          <i class="fa fa-edit"></i>
                      </button>
                      &nbsp;
                      <button type="button" class="btn btn-danger btn-sm" @click="deleteUser(user.id)">
                          <i class="fa fa-trash"></i>
                      </button>
                  </td>
                </tr>
              </tbody></table>
            </div>
            <!-- /.box-body -->
              <div class="card-footer">
                  <pagination :data="users" limit="10" @pagination-change-page="getResults"></pagination>
              </div>
          </div>
          <!-- /.box -->
        </div>
      </div>
      <!-- Modal -->
      <div class="modal fade" id="AddNew" tabindex="-1" role="dialog" aria-labelledby="AddNewLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" v-show="!editmode" id="AddNewUser">Add New User</h5>
              <h5 class="modal-title" v-show="editmode" id="AddNewUser">Update User Information</h5>
              <button type="button" class="close" data-dismiss="modal" @click="close()" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form @submit.prevent="editmode ? updateUserInfo() : addUser()">
              <div class="modal-body">
                <div class="form-group">
                  <input v-model="form.name" type="text" class="form-control" name="name" id="name" placeholder="Name" :class="{ 'is-invalid': form.errors.has('name') }">
                  <has-error :form="form" field="name"></has-error>
                </div>
                <div class="form-group">
                  <input v-model="form.email" type="email" class="form-control" name="email" id="email" placeholder="Email" :class="{ 'is-invalid': form.errors.has('email') }">
                  <has-error :form="form" field="email"></has-error>
                </div>
                <div class="form-group">
                  <input v-model="form.phone" type="number" class="form-control" name="phone" id="phone_number" placeholder="Phone Number" :class="{ 'is-invalid': form.errors.has('phone_number') }">
                  <has-error :form="form" field="phone"></has-error>
                </div>
                <div class="form-group">
                  <select v-model="form.role" class="form-control" name="role" id="role"
                          :class="{ 'is-invalid': form.errors.has('role') }"  >
                      <option selected value="">--Select UserType--</option>
                      <option  value="admin">Admin</option>
                      <option value="client">Client</option>
                  </select>
                  <has-error :form="form" field="role"></has-error>
                </div>
                <div class="form-group">
                  <input v-model="form.password" type="password" class="form-control" name="password" id="password" placeholder="Password" :class="{ 'is-invalid': form.errors.has('password') }">
                  <has-error :form="form" field="password"></has-error>
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" @click="close()" data-dismiss="modal">Close</button>
                <button type="submit" v-show="!editmode" class="btn btn-primary">AddUser</button>
                <button type="submit" v-show="editmode" class="btn btn-primary">UpdateUser</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
</template>


<script>
    export default {
        data(){
            return{
                editmode: false,
                users: {},
                categories: {},
                writer:0,
                form: new Form ({
                  id: '',
                  name: '',
                  phone: '',
                  role: '',
                  email: '',
                  password: '',
                })
            }
        },
        methods: {
            getResults(page = 1) {
                axios.get('api/user?page=' + page)
                    .then(response => {
                        this.users = response.data;
                    });
            },
            updateUserInfo() {
              this.form.put('api/user/'+this.form.id)
              .then(() => {
                  $('#AddNew').modal('hide');
                      this.form.reset();
                      Swal.fire({
                          type: 'success',
                          title: 'User Information Updated',
                      })
              }).catch(() => {
              });
            },
            editUser(user) {
              this.editmode = true;
              this.form.reset();
              $('#AddNew').modal('show');
              this.form.fill(user);
            },
            newUser() {
              this.editmode = false;
              this.form.reset();
              $('#AddNew').modal('show');
            },
            close(){
              $('#AddNew').modal('hide');
            },

            deleteUser(id) {
              Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
              }).then((result) => {
                  if (result.value) {
                    this.form.delete('api/user/'+id).then(() => {
                        Swal.fire(
                          'Deleted!',
                          'User has been deleted.',
                          'success'
                        )
                      Fire.$emit('AfterCreate');
                    }).catch(() => {
                      Swal.fire(
                          'Failed!',
                          'We were unable to deleted.',
                          'warning'
                        )
                    });
                  }
                })
            },
            addUser() {
              this.form.post('api/user')
              .then(() => {
                Fire.$emit('AfterCreate');
                  $('#AddNew').modal('hide');
                      this.form.reset();
                      Swal.fire({
                          type: 'success',
                          title: 'User Successfully Created',
                      })
              })
              .catch(() => {

              })
            },
            getUsers(){
                axios.get("api/user").then(({ data }) => (this.users = data));
            }
        },
        mounted() {
          this.getUsers();
          Fire.$on('AfterCreate',() => {
            this.getUsers();
          });
        }
    }
</script>

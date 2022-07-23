<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                         <h3 class="card-title">All Fixtures</h3>
                        <div class="card-tools ml-auto">
                            <input type="text" id="myInput" @keyup="searchit"  placeholder="Search for games..">
                        </div>
                    </div>
                         <!-- /.box-header -->
                    <div class="card-body table-responsive no-padding">
                        <table class="table table-hover">
                            <tbody><tr>
                            <th>Flag</th>
                            <th>League Name</th>
                            <th>Home Team</th>
                            <th></th>
                            <th>Away Team</th>
                            <th>Match Date</th>
                            <th>Match Time</th>
                            <th>Select A team</th>
                            </tr>
                            <!-- v-for="user in users" :key="user.id" -->
                            <tr v-for="fix in fixtures" :key="fix.id">
                            <td><img :src=fix.country_logo height="20px" width="20px"></td>
                            <td>{{fix.league_name}}</td>
                            <td><img :src=fix.team_home_badge height="20px" width="20px">&nbsp;{{fix.match_hometeam_name}}</td>
                            <td>VS</td>
                            <td><img :src=fix.team_away_badge height="20px" width="20px">&nbsp;{{fix.match_awayteam_name}}</td>
                             <td>{{fix.match_date}}</td>
                              <td>{{fix.match_time}}</td>
                            <td>
                                <button class="btn btn-primary btn-sm" @click="selectFixtures(fix)">
                                    <i class="fa fa-edit"></i>
                                </button>
                            </td>
                            </tr>
                        </tbody>
                        </table>
                    </div>
                 </div>
                     <!-- Modal -->
                        <div class="modal fade" id="AddPrediction" tabindex="-1" role="dialog" aria-labelledby="AddNewLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                <h5 class="modal-title" v-show="!editmode" id="AddPrediction">Add Prediction</h5>
                                <h5 class="modal-title" v-show="editmode" id="AddPrediction">Update Prediction</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                </div>
                                <form @submit.prevent="editmode ? editGame() : addGame()">
                                <div class="modal-body">
                                    <div class="form-group">
                                     <label for="home">Home Team</label>
                                    <input v-model="form.match_hometeam_name" type="text" class="form-control" name="home" id="home" placeholder="Home team" :class="{ 'is-invalid': form.errors.has('home') }">
                                    <has-error :form="form" field="home"></has-error>
                                    </div>    
                                    <div class="form-group">
                                     <label for="away">Away Team</label>
                                    <input v-model="form.match_awayteam_name" type="text" class="form-control" name="away" id="away" placeholder="Away team" :class="{ 'is-invalid': form.errors.has('away') }">
                                    <has-error :form="form" field="home"></has-error>
                                    </div>                                
                                    <div class="form-group">
                                    <label for="subcription">Select subcription</label>
                                    <select v-model="form.subcription" class="form-control" name="subcription" id="subcription"
                                            :class="{ 'is-invalid': form.errors.has('subcription') }"  >
                                        <option selected value="">--Select subcription--</option>
                                        <option  value="free">Free</option>
                                        <option value="vip">VIP</option>
                                        <option value="vip">VVIP</option>
                                    </select>
                                    <has-error :form="form" field="subcription"></has-error>
                                    </div>
                                    <div class="form-group">
                                    <label for="prediction">Select prediction</label>
                                    <select v-model="form.prediction" class="form-control" name="prediction" id="prediction"
                                            :class="{ 'is-invalid': form.errors.has('prediction') }">
                                        <option selected value="">--Select prediction--</option>
                                        <option value="1X2">Full-Time Result</option>
                                        <option value="TG">Under/Over</option>
                                        <option value="CS">Correct Score </option>
                                        <option value="1X">Half time/Full Time (HT/FT)</option>
                                    </select>
                                    <has-error :form="form" field="prediction"></has-error>
                                    </div>
                                    <div class="form-group">
                                    <label for="tip">Tip</label>
                                    <input v-model="form.tip" type="tip" class="form-control" name="tip" id="tip" placeholder="Tip" :class="{ 'is-invalid': form.errors.has('tip') }">
                                    <has-error :form="form" field="tip"></has-error>
                                    </div>
                                    <div class="form-group">
                                    <label for="odds">Odds</label>
                                    <input v-model="form.odds" type="odds" class="form-control" name="odds" id="odds" placeholder="odds" :class="{ 'is-invalid': form.errors.has('odds') }">
                                    <has-error :form="form" field="odds"></has-error>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" v-show="!editmode" class="btn btn-primary">AddPrediction</button>
                                    <button type="submit" v-show="editmode" class="btn btn-primary">UpdatPrediction</button>
                                </div>
                                </form>
                            </div>
                            </div>
                        </div>   
                        <!--end modal-->
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data(){
            return{
                fixtures:{},
                editmode: false,
                form: new Form ({
                  id: '',
                  match_hometeam_name: '',
                  match_awayteam_name: '',
                  away:'',
                  prediction:'',
                  tip:'',
                })
            }
        },
        methods: {
            getCountries(){
                axios.get('/api/fixtures').then(({data}) =>(this.fixtures = data));
            },
            addGame(){

            },
            selectFixtures(fix){
                this.editmode = false;
                $('#AddPrediction').modal('show');
                this.form.fill(fix);
            },
            searchit(){
                let query = this.$parent.search;
                axios.get('api/findgames?q=' + query)
                    .then((data)=>{
                        this.fixtures = data.data;
                    })
                    .catch(()=>{

                    })
            }
        },
        mounted (){
            this.getCountries();
        }
    }
</script>
<style>
.card-tools{
     float: right
}
.card-tools input{
    border-radius: 5rem;
}
    
</style>

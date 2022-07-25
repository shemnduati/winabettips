export default class Gate {

    constructor (user){
        this.user =user;
    }
    isAdmin(){
        return this.user.role === 'admin';
    }
    isClient(){
        return this.user.role === 'client';
    }
}

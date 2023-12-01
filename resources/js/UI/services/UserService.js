import axios from 'axios';
class UserMasterService{
    getList(query){
        return axios.get(`/users?${query}`).then(response =>{
            return response;
        })
    }
}

export default new UserMasterService();
export default class Response
{
    constructor(status, data={})
    {
        if(status == 200) this.success = true;
        else this.success = false;
        this.data = data;
    }
}
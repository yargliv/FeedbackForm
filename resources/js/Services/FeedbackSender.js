import axios from 'axios';

import Response from '../Support/Response';
import config from '../config/feedback';

class FeedbackSender
{
    async create(feedback)
    {
        console.log(feedback);
        const url = config.host+config.create_url;

        const response = await axios.post(url, feedback);
        
        return new Response(response.status, response.data);
    }
}

export default new FeedbackSender;
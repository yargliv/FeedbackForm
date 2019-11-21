import axios from 'axios';

import config from '../config/feedback';

class FeedbackSender
{
    async create(feedback)
    {
        const url = config.host+config.create_url;
        const response = await axios.post(url, feedback);

        return response.data;
    }
}

export default new FeedbackSender;
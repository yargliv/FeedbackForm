import axios from 'axios';

import Response from '../Support/Response';
import config from '../config/feedback';

export default class FeedbackSender
{
    async send(feedback)
    {
        const response = await axios.post(config.send_url, feedback);

        return new Response(response.status, response.data);
    }
}
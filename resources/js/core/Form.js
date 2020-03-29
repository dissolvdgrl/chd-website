import Errors from './Errors';

class Form {
    // Create a new Form instance
    constructor(data) {
        this.originalData = data;
        
        for(let field in data) {
            this[field] = data[field];
        }

        this.errors = new Errors();
    }

    // Fetch all relevant data for the form
    data() {
        let data = {};
        for(let property in this.originalData) {
            data[property] = this[property];
        }

        return data;
    }

    // Reset the form fields
    reset() {
        for(let field in this.originalData) {
            this[field] = '';
        }

        this.errors.clear();
    }

    // Send a POST request to the given URL
    post(url) {
        return this.submit('post', url);
    }

    // Submit the form
    submit(requestType, url) {
        return new Promise((resolve, reject) => {
            axios[requestType](url, this.data())
                .then(response => {
                    this.onSuccess(response.data);
                    resolve(response.data);
                })
                .catch(error => {
                    this.onFail(error.response.data.errors);
                    reject(error.response.data.errors);
                });
        });
    }

    // Handle a successful form submission
    onSuccess(data) {
        data.message;
        this.reset();
    }

    // Handle a failed form submission
    onFail(errors) {
        this.errors.record(errors);
    }
}

export default Form;
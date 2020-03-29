class Errors {
    // create a new Errors instance
    constructor() {
        this.errors = {};
    }

    // Determine if an error exists for the given field
    has(field) {
        return this.errors.hasOwnProperty(field);
    }

    any() {
        return Object.keys(this.errors).length > 0;
    }

    // Retrieve the error message for a field
    get(field) {
        if (this.errors[field]) {
            return this.errors[field][0];
        }
    }

    // Record new errors
    record(errors) {
        this.errors = errors;
    }

    // Clear one or all error fields
    clear(field) {
        if(field) {
            delete this.errors[field];
            return;
        }

        //this.errors = {};
    }
}

export default Errors;
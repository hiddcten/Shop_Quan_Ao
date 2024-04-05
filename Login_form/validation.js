const validation = new JustValidate("#signup");
const validation_login = new JustValidate("#login");

validation_login
    .addField("#signin-email", [
        {
            rule: "required",
            errorMessage: "Please enter your email"
        },
        {
            rule: "email"
        }
    ])
    .addField("#signin-password", [
        {
            rule: "required",
            errorMessage: "Please enter your password"
        }
    ])
    .onSuccess((event) => {
        document.getElementById("login").submit();
    });

validation
    .addField("#name", [
        {
            rule: "required",
            errorMessage: "Please enter your name"
        }
    ])
    .addField("#email", [
        {
            rule: "required",
            errorMessage: "Please enter your email"
        },
        {
            rule: "email"
        },
        {
            validator: (value) => () => {
                return fetch("validate-email.php?email=" + encodeURIComponent(value))
                       .then(function(response) {
                           return response.json();
                       })
                       .then(function(json) {
                           return json.available;
                       });
            },
            errorMessage: "email already exist"
        }
    ])
    .addField("#password", [
        {
            rule: "required",
            errorMessage: "Please enter your password"
        }
    ])
    .addField("#password_confirmation", [
        {
            validator: (value, fields) => {
                return value === fields["#password"].elem.value;
            },
            errorMessage: "Passwords should match"
        }
    ])
    .onSuccess((event) => {
        document.getElementById("signup").submit();
    });


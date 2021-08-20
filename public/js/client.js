class Client {

    static token = '';

    logOut() {
        console.log("Logout");
    }

    constructor(data = null, func = null) {
        if (data) {
            var jsondata = {
                grant_type: "password",
                client_id: "2",
                client_secret: "Kn0ak9T0c3yLjJidEofx5EYmXIS6GBOu0JWsAui2",
                username: data.email,
                password: data.password,
                scope: "",
            };

            fetch("oauth/token", {
                    method: "POST",
                    headers: {
                        "Content-Type": "application/json",
                        "Accept": "application/json",
                    },
                    body: JSON.stringify(jsondata),
                })
                .then((response) => {
                    if (response.ok) {
                        return response.json();
                    } else {
                        throw new Error('Something went wrong');
                        // TODO LOG OUT
                    }
                })
                .then(data => {
                    this.token = "Bearer " + data.access_token;
                    localStorage.setItem("token", this.token);
                    console.log("API_CALL");
                    if(func != null){
                        func();
                    }
                });
        } else {
            if (localStorage.getItem("token")) {
                this.token = localStorage.getItem("token");
                console.log(this.token);
            } else {
                logOut();
            }
        }
    }

    get = async (url, func) => {
        var error = false;
        var data;

        const response = await fetch(url, {
            headers: {
                "Content-Type": "application/json",
                "Accept": "application/json",
                "Authorization": this.token
            }
        })

        if (response.ok) {
            data = await response.json();

        } else {
            data = null,
                error = true
        }

        func({
            data,
            error
        });
    }

    post = async (url, data, func) => {
        var error = false;
        var data;

        const response = await fetch(url, {
            method: "POST",
            headers: {
                "Content-Type": "application/json",
                "Accept": "application/json",
                "Authorization": this.token
            },
            body: JSON.stringify(data)
        })

        if (response.ok) {
            data = await response.json();

        } else {
            data = null,
                error = true
        }

        func({
            data,
            error
        });
    }

}

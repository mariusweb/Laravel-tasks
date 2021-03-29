import React from 'react';
import ReactDOM from 'react-dom';

function User() {
    return (
        <div className="container">
            <div className="row justify-content-center">
                <div className="col-md-8">
                    <div className="card">
                        <div className="card-header"><h2>React Component in Laravel</h2></div>
                        <h2>Helo World</h2>

                        <div className="card-body">I'm tiny React component in Laravel app!</div>
                    </div>
                </div>
            </div>
        </div>
    );
}

export default User;

if (document.getElementById('user')) {
    ReactDOM.render(<User />, document.getElementById('user'));
}
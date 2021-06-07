import React from 'react';
import Authenticated from '@/Layouts/Authenticated';
import { Alert } from '../Components/Alert'

export default function Dashboard(props) {
    return (
        <Authenticated
            auth={props.auth}
            errors={props.errors}
            header={<h2 className="font-semibold text-xl text-gray-800 leading-tight">Dashboard</h2>}
        >

            <Alert>Hey look out for that three headed monkey.</Alert>
        </Authenticated>
    );
}

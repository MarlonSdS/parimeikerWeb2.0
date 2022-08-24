import React from "react";
import {Route, Routes} from 'react-router-dom'
import Homepage from "./pages/homepage";

export default function Rotas(){
    return(
        <Routes>
            <Route exact path='/' element={<Homepage />}/>
        </Routes>
    )
}
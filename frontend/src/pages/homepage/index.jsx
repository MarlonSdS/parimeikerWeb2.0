import React, { useEffect, useState } from "react";
import axios from 'axios'

export default function Homepage(){

    async function getTest(){
        var teste = await axios.get('http://localhost:8000?teste=users')

        //console.log(teste.data)
        setRes(teste.data)
        console.log(res)
    }
    
    const [res, setRes] = useState()
    useEffect(() =>{
        getTest()
        console.log(res)
    },[])
    return(
        <>
            <div><h1>Logo</h1></div>
            <main>
                <p>{res}</p>
            </main>
        </>
    )
}
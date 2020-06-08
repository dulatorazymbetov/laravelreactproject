import React, { useState, useEffect } from "react";
import { useParams } from "react-router-dom";

import DiplomaSupplementItem from "./item.js";
import DiplomaSupplementMain from "./main.js";

function DiplomaSupplement(){
	const { id } = useParams();
	if(id){return (<DiplomaSupplementItem id={id} />);}
	else {return (<DiplomaSupplementMain />);}
}
export default DiplomaSupplement;
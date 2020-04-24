import React, { useState, useEffect } from "react";
import { useParams } from "react-router-dom";

import EduProgramsItem from "./programs/item.js";
import EduProgramsMain from "./main.js";

function EduPrograms(){
	const { id } = useParams();
	if(id){return (<EduProgramsItem id={id} />);}
	else {return (<EduProgramsMain />);}
}
export default EduPrograms;
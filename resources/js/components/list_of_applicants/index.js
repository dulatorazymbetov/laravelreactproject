import React, { useState, useEffect } from "react";
import { useParams } from "react-router-dom";

import ApplicantItem from "./item.js";
import ListOfApplicants from "./list.js";

function Applicants(){
	const { id } = useParams();
	if(id){return (<ApplicantItem id={id} />);}
	else {return (<ListOfApplicants />);}
}
export default Applicants;
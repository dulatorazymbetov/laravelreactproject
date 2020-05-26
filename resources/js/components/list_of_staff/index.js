import React, { useState, useEffect } from "react";
import { useParams } from "react-router-dom";

import StaffItem from "./item.js";
import ListOfStaff from "./list.js";

function Staff(){
	const { id } = useParams();
	if(id){return (<StaffItem id={id} />);}
	else {return (<ListOfStaff />);}
}
export default Staff;
import React, { useState, useEffect } from "react";
import { useParams } from "react-router-dom";

import { makeStyles } from '@material-ui/core/styles';
import Box from '@material-ui/core/Box';
import Paper from '@material-ui/core/Paper';
import Title from "@layouts/title";
import Tabs from '@material-ui/core/Tabs';
import Tab from '@material-ui/core/Tab';

import { useLang } from "@contexts/lang";
import EduProgramsList from "./programs/index.js";
import SubjectsList from "./subjects/index.js";

const useStyles = makeStyles(theme => ({
		
}));

function EduProgramsMain(props){
	const classes = useStyles();
	const { id } = useParams();
	const { getL } = useLang();
	const [tab, setTab] = useState(0);

	useEffect(() => {
       	
    }, []);

	const tabChange =(event, newValue) => {
		setTab(newValue);
	}
	if(id){
		return (
			<EduProgramsItem id={id} />
		);
	}
	else {
		return (
			<Box>
				<Title content="Образовательные программы" />
				<Box component={Paper} mt={4} square>
	      			<Tabs
				        value={tab}
				        indicatorColor="primary"
				        textColor="primary"
				        onChange={tabChange}
	      			>
				        <Tab label="Программы" />
				        <Tab label="Дисциплины" />
				        <Tab label="Заявки от кафедр" disabled />
	      			</Tabs>
	    		</Box>
				{tab===0 && <EduProgramsList />}
				{tab===1 && <SubjectsList />}
			</Box>
		);
	}
}

export default EduProgramsMain;
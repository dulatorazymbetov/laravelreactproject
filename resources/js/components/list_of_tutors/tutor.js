import React, { useState, useEffect } from "react";
import { makeStyles } from '@material-ui/core/styles';

import Box from '@material-ui/core/Box';

import Dialog from '@material-ui/core/Dialog';
import DialogTitle from '@material-ui/core/DialogTitle';
import DialogContent from '@material-ui/core/DialogContent';

import Tabs from '@material-ui/core/Tabs';
import Tab from '@material-ui/core/Tab';

import TextField from '@material-ui/core/TextField';

import { useLang } from "@contexts/lang"; 

const useStyles = makeStyles(theme => ({
	
}));

function StudyPlan(props){
	const classes = useStyles();

	const [tab, setTab] = useState(0);

	const { getL } = useLang();

    async function getData(rows, page) {
		window.axios.get('tutors/' + props.id).then((response) => {
			
        });
	}
	useEffect(() => {
		getData();
	}, []);
	
	const tabChange = (event, newValue) => {
		setTab(newValue);
	}

	return (
		<Dialog
			fullWidth
			maxWidth="lg"
			open={true}
			onClose={() => {props.setTutor(null)}}
		>
				<Tabs
				    value={tab}
				    indicatorColor="primary"
				    textColor="primary"
				    onChange={tabChange}
				    aria-label="tutor-tabs"
				>
				    <Tab label="Данные о преподавателе" />
				    <Tab label="Публикации" />
				    <Tab label="Обучение" />
				</Tabs>
				<DialogContent>
					{tab===0 && <Box>
						<form>
							<TextField
          						label="Read Only"
          						defaultValue="Hello World"
          						InputProps={{
            						readOnly: true,
          						}}
        					/>
						</form>
					</Box>}
				</DialogContent>
		</Dialog>
	);
}

export default StudyPlan;

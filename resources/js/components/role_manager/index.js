import React, { useState, useEffect } from "react";

import { makeStyles } from '@material-ui/core/styles';
import Box from '@material-ui/core/Box';
import Title from "@layouts/title";
import Paper from '@material-ui/core/Paper';
import Tabs from '@material-ui/core/Tabs';
import Tab from '@material-ui/core/Tab';

import UserList from './user_list';

const useStyles = makeStyles(theme => ({
	
}));

function RoleManager(){
	const [tab, setTab] = useState(0);

	const handleTabChange = (e, tab) => {
		setTab(tab);
	}

	return (
		<Box>
			<Title content="Менеджмент ролей" />
			<Box mt={4}>
				<Paper square>
					<Tabs
				    	value={tab}
				    	indicatorColor="primary"
				    	textColor="primary"
				    	onChange={handleTabChange}
				  	>
				    	<Tab label="Все пользователи" />
				    	<Tab label="Редактор ролей" />
				    	<Tab label="Редактор модулей" />
				  	</Tabs>
				</Paper>
			</Box>
			<Box mt={4}>
				{tab===0 && <UserList />}
			</Box>
		</Box>
	);
}

export default RoleManager;
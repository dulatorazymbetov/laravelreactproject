import React, { useState, useEffect } from "react";

import { makeStyles } from '@material-ui/core/styles';
import Box from '@material-ui/core/Box';
import Paper from '@material-ui/core/Paper';
import Title from "@layouts/title";

import Table from '@material-ui/core/Table';
import TableHead from '@material-ui/core/TableHead';
import TableBody from '@material-ui/core/TableBody';
import TableRow from '@material-ui/core/TableRow';
import TableCell from '@material-ui/core/TableCell';

const useStyles = makeStyles(theme => ({
	
}));

function RoleManager(){
	const classes = useStyles();
	const [users, setUsers] = useState([]);
	useEffect(() => {
    	window.axios('/users').then((response) => {
    		setUsers(response.data);
    	});
    }, []);

	return (
		<Box>
			<Title content="Менеджмент ролей" />
			<Box mt={4}>
				<Table stickyHeader>
					<TableHead>
						<TableRow>
							<TableCell>
								ID
							</TableCell>
							<TableCell>
								ФИО
							</TableCell>
							<TableCell>
								Доступные роли
							</TableCell>	
						</TableRow>
					</TableHead>
					<TableBody>
						{users.map((user, user_index) => {
							return (
								<TableRow hover key={"user_"+user_index}>
									<TableCell>
										{user.id}
									</TableCell>
									<TableCell>
										{user.firstname} {user.lastname}
									</TableCell>
									<TableCell>
										{user.roles.map((role, role_index) =>{
											return (
												<div key={"role_"+role_index}>
													{role.name}
												</div>
											);
										})}
									</TableCell>
								</TableRow>
							);
						})}
					</TableBody>
				</Table>
			</Box>
		</Box>
	);
}

export default RoleManager;
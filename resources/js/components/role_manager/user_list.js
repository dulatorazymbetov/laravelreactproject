import React, { useState, useEffect } from "react";

import { makeStyles } from '@material-ui/core/styles';

import Paper from '@material-ui/core/Paper';
import TableContainer from '@material-ui/core/TableContainer';
import Table from '@material-ui/core/Table';
import TableHead from '@material-ui/core/TableHead';
import TableBody from '@material-ui/core/TableBody';
import TableRow from '@material-ui/core/TableRow';
import TableCell from '@material-ui/core/TableCell';

import { useLang } from "@contexts/lang";

const useStyles = makeStyles(theme => ({
	
}));

function UserList(props) {
	const classes = useStyles();
	const [users, setUsers] = useState([]);

	useEffect(() => {
    	window.axios('/users').then((response) => {
    		setUsers(response.data);
    	});
    }, []);

	return (
		<TableContainer component={Paper}>
			<Table stickyHeader>
				<TableHead>
					<TableRow>
						<TableCell>
							ID
						</TableCell>
						<TableCell>
							Учетная запись
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
									{user.login}
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
		</TableContainer>
	);

} 
export default UserList;